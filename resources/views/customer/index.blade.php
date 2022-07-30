@extends('home');

@section('container')
<br>
<a href="customer/create" class="btn btn-primary">Create</a>
<br>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
      <th scope="col">Category id</th>
      <th scope="col">Options</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($customers as $customer)
  
    
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->name}}</td>
      <td>{{$customer->address}}</td>
      <td>{{$customer->phone_number}}</td>
      <td>{{$customer->created_at}}</td>
      <td>{{$customer->updated_at}}</td>
      <!-- <td>{{$customer->category_id}}</td>-->
      <td>{{ App\Category::getDescriptionById($customer->category_id) }}</td>
      <td>
      <form action="{{route ('customer.destroy', $customer->id) }}" method="POST">
            <a href="/customer/{{$customer->id}}/edit" type="button" class="btn btn-success">Edit</a>

            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
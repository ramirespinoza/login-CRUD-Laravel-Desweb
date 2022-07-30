@extends('home');

@section('container')
<br>
<a href="category/create" class="btn btn-primary">Create</a>
<br>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Description</th>
      <th scope="col">Options</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
    <tr>
      <th scope="row">{{$category->id_category}}</th>
      <td>{{$category->description}}</td>
      <td>
        <form action="{{route ('category.destroy', $category->id_category) }}" method="POST">
            <a href="/category/{{$category->id_category}}/edit" type="button" class="btn btn-success">Edit</a>

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
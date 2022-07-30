@extends('home');

@section('container')
<h1>Create new customer item</h1>
<form action="/customer" method="POST">
@csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address">
  </div>

  <div class="mb-3">
    <label for="phone_number" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="phone_number" name="phone_number">
  </div>

  <div class="mb-3">
  <label for="category_id" class="form-label">Category ID</label>
  <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="category_id" name="category_id">
    <option selected>Open this select menu</option>
    {{$categories = App\Category::all()}}
    @foreach ($categories as $category)
    <option value="{{$category->id_category}}">{{$category->description}}</option>
    @endforeach
  </select>
    <!-- <label for="category_id" class="form-label">Category ID</label>
    <input type="text" class="form-control" id="category_id" name="category_id"> -->
  </div>

  <a href="/customer" class="btn btn-secondary">Cancel</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
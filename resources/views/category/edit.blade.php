@extends('home');

@section('container')
<h1>Edit category item</h1>
<form action="/category/{{$category->id_category}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
    <label for="id_category" class="form-label">ID</label>
    <input class="form-control" id="id_category" name="id_category" rows="3" value="{{$category->id_category}}" disabled></input>
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input class="form-control" id="description" name="description" rows="3" value="{{$category->description}}"></input>
  </div>
  <a href="/category" class="btn btn-secondary">Cancel</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
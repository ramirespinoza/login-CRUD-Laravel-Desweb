@extends('home');

@section('container')
<h1>Create new category item</h1>
<form action="/category" method="POST">
@csrf
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>
  <a href="/category" class="btn btn-secondary">Cancel</a>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
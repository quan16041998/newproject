@extends('master.bookmaster')

@section('main')
  <br><br><br><br>
  <div class="container">
  <h2>New Book</h2>
  <form>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="" name="title">
    </div>
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" class="form-control" id=""  name="author">
    </div>
    <div class="form-group">
      <label for="page">Pages</label>
      <input type="number" class="form-control" id=""  name="page">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
@endsection

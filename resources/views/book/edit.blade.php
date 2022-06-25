@extends('master.bookmaster')

@section('main')
  <br><br><br><br>
  <div class="container">
    <h1>Update An Existing Book</h1>
    <form>
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id=""  name="title" value="Introduction to Nothing">
      </div>
      <div class="form-group">
        <label for="author">Author</label>
        <input type="text" class="form-control" id=""  name="author" value="Unkonown Author">
      </div>
      <div class="form-group">
        <label for="page">Pages</label>
        <input type="number" class="form-control" id=""  name="page" value="1604">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection

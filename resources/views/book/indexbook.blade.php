@extends('master.bookmaster')
@section('main')
    <br>

 <form>
   <div class="row">
    <div class="col-lg" >
      &nbsp;
    </div>
     <div class="col-lg-8">
       <h1>Book Index</h1>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Author</th>
        <th>Pages</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tr>
        <td>1</td>
        <td>PHP for Dummies</td>
        <td>Bat Man</td>
        <td>413</td>
        <td> <button type="button" class="btn btn-success"><a  class="text-light" href="{{route('book.edit')}}">Edit</a></button> </td>
        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#book" data-whatever="PHP for Dummies">Delete</button>@include('partials.modalbook')</td>
    </tr>
    <tr>
        <td>2</td>
      <td>Getting started with Laravel</td>
        <td>Flash</td>
        <td>209</td>
        <td><button type="button" class="btn btn-success"><a  class="text-light" href="{{route('book.edit')}}">Edit</a></button></td>
        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#book1" data-whatever="PHP for Dummies">Delete</button>@include('partials.modalbook')</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Advanced Laravel</td>
        <td>Superman</td>
        <td>559</td>
        <td><button type="button" class="btn btn-success"><a  class="text-light" href="{{route('book.edit')}}">Edit</a></button></td>
        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#book2" data-whatever="PHP for Dummies">Delete</button>@include('partials.modalbook')</td>
    </tr>
</table>
     </div>
     <div class="col-lg" >
       &nbsp;
     </div>
  </div>
 </form>

@endsection


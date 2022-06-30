@extends('masters.adminmaster')
@section('main')
  <div class="container">
    @csrf
    <dl class="row">
      <div class="col-sm-6">
        <dt class="col-sm-3">ID</dt>
        <dd class="col-sm-9">{{ $collection->CollectionID }}</dd>

        <dt class="col-sm-3">Name</dt>
        <dd class="col-sm-9">{{ $collection->name }}</dd>
        <dt class="col-sm-3">Introduce</dt>
        <dd class="col-sm-9">{{$collection->introduce }}</dd>
      </div>
        @php
        $img = 'images/collection/'
        @endphp
      <div class="col-sm-6">
        <img src="{{asset($img.$collection->urlimg)}}" width="350px" height="400px">
      </div>

    </dl>
    <a type="button" href="{{route('admin.collectionindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
  </div>
@endsection

@extends('masters.adminmaster')
@section('main')
  <div class="container">
    @include('eproject.product.productDetails')

    <form action="{{route('admin.deleteproduct', ['id' => $product->CID])}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$product->CID}}">
      <button type="submit" class="btn btn-danger">Delete</button>
      <a href="{{route('admin.productindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
    </form>
  </div>
@endsection

@extends('masters.newmaster')
@section('main')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('admin.deleteproduct', ['id' => old('id')?? $product->CID])}}"
                autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Product Delete') }}</h4>
                <p class="card-category">{{ __('Product information') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <dl class="row">
                  <dt class="col-sm-3">Product Code</dt>
                  <dd class="col-sm-9">{{$product->product_code }}</dd>

                  <dt class="col-sm-3">fabric</dt>
                  <dd class="col-sm-9">{{$product->fabric }}</dd>

                  <dt class="col-sm-3">price</dt>
                  <dd class="col-sm-9">{{$product->price }}</dd>

                  <dt class="col-sm-3">size</dt>
                  <dd class="col-sm-9">{{$product->size }}</dd>

                  <dt class="col-sm-3">Collection</dt>
                  <dd class="col-sm-9">{{ $collection->name}}</dd>

                  <dt class="col-sm-3">Stylist</dt>
                  <dd class="col-sm-9">{{ $stylist->name }}</dd>

                  <dt class="col-sm-3">Urlimg</dt>
                  <dd class="col-sm-9"><img src="{{asset("images/product/".$product->urlimg)}}" width="350" height="400"></dd>
                </dl>

                  <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                  </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

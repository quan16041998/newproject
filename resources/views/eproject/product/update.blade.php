@extends('masters.newmaster')

@section('main')
  <div class="content">
      @include('partials.ErrorsAll')
      @include('partials.sessionmessage')
      @include('partials.allmessage')
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('admin.updateproduct', ['id' => old('id')?? $product->CID])}}"
                autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                <p class="card-category">{{ __('Product information') }}</p>
              </div>
              <div class="card-body container">
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
                  <input type="hidden" name="id" value="{{$product->CID}}">

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Product Code') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="product_code" id="product_code"
                             type="text placeholder="{{ __('product_code') }}"
                      value="{{old('product_code')?? $product->product_code}}" />
                    </div>
                  </div>
                </div>

                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Fabric') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input class="form-control" name="fabric" id="fabric"
                               type="text placeholder="{{ __('fabric') }}"
                        value="{{old('fabric')?? $product->fabric}}" />
                      </div>
                    </div>
                  </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Price') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="price" id="Price" type="text" placeholder="{{ __('Price') }}"
                             value="{{old('Price')?? $product->price}}"  />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Size') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="size" id="size" type="text" placeholder="{{ __('size') }}"
                             value="{{old('size')?? $product->size}}"  />
                    </div>
                  </div>
                </div>
                  @php
                    $img = 'images/product/';
                   $sid = old('stylist') ??  $product->SID ??  null;
                   $cid = old('collection') ?? $product->CollectionID  ?? null;
                  @endphp

                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('IMG') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <input type="hidden" class="form-control" name="urlimg" id="urlimg"
                               value="{{old('urlimg')?? $product->urlimg}}" /><br>
                        <img src="{{asset($img.$product->urlimg)}}" width="350" height="400">

                      </div>
                    </div>
                  </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Chose File') }}</label>
                        <input type="file" name="image" class="col-sm-7">
                    </div>
                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Stylist') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <select name="SID" class="form-control" id="stylist">
                          <option value="0">Please select a stylist :)</option>
                          @foreach($stylist as $s)
                            <option value="{{ $s->SID }}"
                              {{ ($sid != null && $s->SID == $sid) ? 'selected' : '' }}
                            >  {{ $s->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Collection') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group">
                        <select name="CollectionID" class="form-control" id="collection">
                          <option value="0">Please select a Collection :)</option>
                          @foreach($collection as $c)
                            <option value="{{ $c->CollectionID }}"
                              {{ ($cid != null && $c->CollectionID == $cid) ? 'selected' : '' }}
                            >  {{ $c->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>

                <div class="card-footer ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                  <a type="button" class="btn btn-info"
                     href="{{route('admin.productindex')}}">
                    <i class="bi bi-backspace">back</i>
                  </a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection

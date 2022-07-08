@extends('masters.newmaster')
@section('main')
  <div class="content">
      @include('partials.ErrorsAll')
      @include('partials.sessionmessage')
      @include('partials.allmessage')
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('admin.deletecollection', ['id' => old('id')?? $collection->CollectionID ])}}"
                autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$collection->CollectionID}}">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Collection Delete') }}</h4>
                <p class="card-category">{{ __('Collection information') }}</p>
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
                  <dt class="col-sm-3">Name</dt>
                  <dd class="col-sm-9">{{ $collection->name }}</dd>
                    <dt class="col-sm-3">Introduct</dt>
                    <dd class="col-sm-9">{{ $collection->introduce  }}</dd>
                    <dt class="col-sm-3">IMG</dt>
                    <dd class="col-sm-9"> <img src="{{asset("images/collection/".$collection->urlimg)}}" width="350" height="400"></dd>

                </dl>
                  <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                    <a type="button" class="btn btn-info"
                       href="{{route('admin.collectionindex')}}">
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
  </div>
@endsection

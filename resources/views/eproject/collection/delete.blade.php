@extends('masters.newmaster')
@section('main')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="get" action="{{route('admin.deletecollection', ['id' => old('id')?? $collection->CollectionID ])}}"
                autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf

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

                  <dt class="col-sm-3">Stylist</dt>
                  <dd class="col-sm-9">{{ $collection->stylist }}</dd>

                  <dt class="col-sm-3">Introduct</dt>
                  <dd class="col-sm-9">{{ $collection->introduce  }}</dd>

                </dl>
                  <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary">{{ __('Delete') }}</button>
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

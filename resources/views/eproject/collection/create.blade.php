@extends('masters.newmaster')

@section('main')
  <div class="content">
      @include('partials.ErrorsAll')
      @include('partials.sessionmessage')
      @include('partials.allmessage')
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('admin.storecollection')}}"
                autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Create Profile') }}</h4>
                <p class="card-category">{{ __('Collection information') }}</p>
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
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="name" id="name" type="text placeholder="{{ __('Name') }}"
                      value="{{old('name')?? $collection->name}}" />
                    </div>
                  </div>
                </div>


                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Chose File') }}</label>
                        <input type="file" name="image" class="col-sm-7">
                    </div>


                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('introduce') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="introduce" id="contact" type="text" placeholder="{{ __('introduce') }}"
                             value="{{old('introduce')?? $collection->introduce}}"  />
                    </div>
                  </div>
                </div>
                <div class="card-footer ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
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

@endsection

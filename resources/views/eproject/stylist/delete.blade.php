@extends('masters.newmaster')
@section('main')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('admin.deletestylist', ['id' => old('id')?? $stylist->SID])}}"
                autocomplete="off" class="form-horizontal">
            @csrf
            <input type="hidden" name="id" value="{{$stylist->SID}}">

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Stylist Delete') }}</h4>
                <p class="card-category">{{ __('Stylist information') }}</p>
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
                  <dt class="col-sm-3">Stylist name</dt>
                  <dd class="col-sm-9">{{$stylist->name }}</dd>

                  <dt class="col-sm-3">dob</dt>
                  <dd class="col-sm-9">{{$stylist->dob }}</dd>

                  <dt class="col-sm-3">contact</dt>
                  <dd class="col-sm-9">{{$stylist->contact }}</dd>

                  <dt class="col-sm-3">email</dt>
                  <dd class="col-sm-9">{{$stylist->email }}</dd>

                  <dt class="col-sm-3">history</dt>
                  <dd class="col-sm-9">{{$stylist->history }}</dd>

                  <dt class="col-sm-3">IMG</dt>
                  <dd class="col-sm-9"><img src="{{asset("images/stylist/".$stylist->urlimg)}}" width="350" height="400"></dd>

                </dl>
                  <div class="col-md-4">
                     <a type="button" class="btn btn-info"
                     href="{{route('admin.stylistindex')}}">
                    <i class="bi bi-backspace">back</i>
                  </a>
                  <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
                  
                  </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@extends('masters.newmaster')

@section('main')
  <div class="content">
      @include('partials.ErrorsAll')
      @include('partials.sessionmessage')
      @include('partials.allmessage')
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('admin.createstylist')}}"
                autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Create Profile') }}</h4>
                <p class="card-category">{{ __('Stylist information') }}</p>
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
                  <label class="col-sm-2 col-form-label">{{ __('Stylist name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="name" id="name" type="text placeholder="{{ __('Name') }}"
                      value="{{old('name')?? $stylist->name}}" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Data Of Birth') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="dob" id="dob" type="date" placeholder="{{ __('DOB') }}"
                             value="{{old('dob')?? $stylist->dob}}"  />
                    </div>
                  </div>
                </div>

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Contact') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="contact" id="contact" type="text" placeholder="{{ __('Contact') }}"
                             value="{{old('contact')?? $stylist->contact}}"  />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}"
                             value="{{old('email')?? $stylist->email}}" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('History') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="history" id="input-history" type="history" placeholder="{{ __('history') }}"
                             value="{{old('history')?? $stylist->history}}"/>
                    </div>
                  </div>
                </div>

                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Chose File') }}</label>
                        <input type="file" name="image" class="col-sm-7">
                    </div>
                <div class="card-footer ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  {{--      <div class="row">--}}
  {{--        <div class="col-md-12">--}}
  {{--          <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">--}}
  {{--            @csrf--}}
  {{--            @method('put')--}}

  {{--            <div class="card ">--}}
  {{--              <div class="card-header card-header-primary">--}}
  {{--                <h4 class="card-title">{{ __('Change password') }}</h4>--}}
  {{--                <p class="card-category">{{ __('Password') }}</p>--}}
  {{--              </div>--}}
  {{--              <div class="card-body ">--}}
  {{--                @if (session('status_password'))--}}
  {{--                  <div class="row">--}}
  {{--                    <div class="col-sm-12">--}}
  {{--                      <div class="alert alert-success">--}}
  {{--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
  {{--                          <i class="material-icons">close</i>--}}
  {{--                        </button>--}}
  {{--                        <span>{{ session('status_password') }}</span>--}}
  {{--                      </div>--}}
  {{--                    </div>--}}
  {{--                  </div>--}}
  {{--                @endif--}}
  {{--                <div class="row">--}}
  {{--                  <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Current Password') }}</label>--}}
  {{--                  <div class="col-sm-7">--}}
  {{--                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">--}}
  {{--                      <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Current Password') }}" value="" required />--}}
  {{--                      @if ($errors->has('old_password'))--}}
  {{--                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>--}}
  {{--                      @endif--}}
  {{--                    </div>--}}
  {{--                  </div>--}}
  {{--                </div>--}}
  {{--                <div class="row">--}}
  {{--                  <label class="col-sm-2 col-form-label" for="input-password">{{ __('New Password') }}</label>--}}
  {{--                  <div class="col-sm-7">--}}
  {{--                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">--}}
  {{--                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('New Password') }}" value="" required />--}}
  {{--                      @if ($errors->has('password'))--}}
  {{--                        <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>--}}
  {{--                      @endif--}}
  {{--                    </div>--}}
  {{--                  </div>--}}
  {{--                </div>--}}
  {{--                <div class="row">--}}
  {{--                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Confirm New Password') }}</label>--}}
  {{--                  <div class="col-sm-7">--}}
  {{--                    <div class="form-group">--}}
  {{--                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Confirm New Password') }}" value="" required />--}}
  {{--                    </div>--}}
  {{--                  </div>--}}
  {{--                </div>--}}
  {{--              </div>--}}
  {{--              <div class="card-footer ml-auto mr-auto">--}}
  {{--                <button type="submit" class="btn btn-primary">{{ __('Change password') }}</button>--}}
  {{--              </div>--}}
  {{--            </div>--}}
  {{--          </form>--}}
  {{--        </div>--}}
  {{--      </div>--}}
  {{--    </div>--}}
  {{--  </div>--}}
@endsection

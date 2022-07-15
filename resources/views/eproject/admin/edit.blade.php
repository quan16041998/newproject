@extends('masters.newmaster')

@section('main')
  <div class="content">
    @include('partials.ErrorsAll')
    @include('partials.sessionmessage')
    @include('partials.allmessage')
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{route('admin.updateadmin', ['username' => old('username')?? $admin->username])}}"
                autocomplete="off" class="form-horizontal">
            @csrf

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                <p class="card-category">{{ __('Admin information') }}</p>
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

                  <input type="hidden" name="username" value="{{$admin->username}}">

                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('User Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control"  id="username" type="text"
                             value="{{ old('username')?? $admin->username }}" disabled />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="name" id="name" type="text"
                             value="{{old('name')?? $admin->name}}" />
                    </div>
                  </div>
                </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Data Of Birth') }}</label>
                        <div class="col-sm-7">
                            <div class="form-group">
                                <input class="form-control" name="dob" id="dob" type="date"
                                       value="{{old('dob')?? $admin->dob}}"  />
                            </div>
                        </div>
                    </div>

                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Contact') }}</label>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <input class="form-control" name="contact" id="contact" type="text"
                                   value="{{old('contact')?? $admin->contact}}"  />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <input class="form-control" name="email" id="input-email" type="email"
                                   value="{{old('email')?? $admin->email}}" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Old Password') }}</label>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <input class="form-control" name="oldpassword" id="oldpassword" type="password"  value="" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('New Password') }}</label>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <input class="form-control" name="newpassword" id="newpassword" type="password" value="" />
                        </div>
                    </div>
                </div>
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

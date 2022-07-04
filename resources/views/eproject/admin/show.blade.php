@extends('masters.newmaster')
@section('main')
    <div class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <form method="post" action="{{route('admin.updateadmin', ['username' => old('username')?? $admin->username])}}" autocomplete="off" class="form-horizontal">
                          @csrf
                          @method('put')

                          <div class="card ">
                              <div class="card-header card-header-primary">
                                  <h4 class="card-title">{{ __('Admin Detail') }}</h4>
                                  <p class="card-category">{{ __('Admin information') }}</p>
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
                                          <dt class="col-sm-3">User name</dt>
                                          <dd class="col-sm-9">{{ $admin->username }}</dd>

                                          <dt class="col-sm-3">Name</dt>
                                          <dd class="col-sm-9">{{ $admin->name }}</dd>

                                          <dt class="col-sm-3">Date of birth</dt>
                                          <dd class="col-sm-9">{{ $admin->dob }}</dd>

                                          <dt class="col-sm-3">Contact</dt>
                                          <dd class="col-sm-9">{{ $admin->contact }}</dd>

                                          <dt class="col-sm-3">Email</dt>
                                          <dd class="col-sm-9">{{ $admin->email }}</dd>

                                      </dl>
                              <div class="card-footer ml-auto mr-auto">

                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
@endsection

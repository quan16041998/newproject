@extends('masters.adminmaster')

@section('main')
  <div class="container">
    <h1 class="display-4">Update An Existing Admin</h1>
    @include('partials.ErrorsAll')
      @include('partials.sessionmessage')
    <form action="{{route('admin.updateadmin', ['username' => old('username')?? $admin->username])}}" method="post">
      @csrf
      <div class="card-body">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-table me-1"></i>
          </div>
          <div class="card-body">
            <div class="dataTable-container">
              <table id="datatablesSimple" class="dataTable-table">
                <thead>
                <tr>
                  <th><label for="username" class="font-weight-bold">Username</label>
                  <th><input type="text" class="form-control value="{{old('username')?? $admin->username}}" disabled></th>
                    <input type="hidden" name="username" value="{{old('username')?? $admin->username}}">
                </tr>
                <tr>
                  <th><label for="newpassword" class="font-weight-bold">New Password</label></th>
                  <th><input type="password" class="form-control" id="password" name="newpassword"
                            ></th>
                </tr>
                <tr>
                  <th><label for="name" class="font-weight-bold">Name</label></th>
                  <th><input type="text" class="form-control" id="name" name="name"
                             value="{{old('name')?? $admin->name}}">
                </tr>
                <tr>
                  <th><label for="title" class="font-weight-bold">Date of birth</label></th>
                  <th><input type="date" class="form-control" id="dob" name="dob"
                             value="{{old('dob')?? $admin->dob}}">
                </tr>
                <tr>
                  <th><label for="title" class="font-weight-bold">Contact</label></th>
                  <th><input type="text" class="form-control" id="contact" name="contact"
                             value="{{old('contact')?? $admin->contact}}">
                </tr>
                <tr>
                  <th><label for="title" class="font-weight-bold">Email</label></th>
                  <th><input type="text" class="form-control" id="email" name="email"
                             value="{{old('email')?? $admin->email}}">
                </tr>
                <tr>
                    <th><label for="oldpassword" class="font-weight-bold">Please enter old password for update</label></th>
                    <th><input type="password" class="form-control" id="oldpassword" name="oldpassword"
                        ></th>
                </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
        <button type="submit" class="btn btn-dark">Submit</button>
        <a type="button" href="{{route('admin.adminindex')}}" class="btn btn-info">&lt;&lt;&nbsp;Back</a>
    </form>

  </div>
@endsection

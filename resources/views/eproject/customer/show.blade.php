@extends('masters.newmaster')
@section('main')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="get" action="{{route('admin.updatecustomer', ['id' => old('id')?? $customer->CusID])}}"
                autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Customer Detail') }}</h4>
                <p class="card-category">{{ __('Customer information') }}</p>
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
                    <dt class="col-sm-3">Customer name</dt>
                    <dd class="col-sm-9">{{$customer->name }}</dd>

                    <dt class="col-sm-3">dob</dt>
                    <dd class="col-sm-9">{{$customer->dob }}</dd>

                    <dt class="col-sm-3">contact</dt>
                    <dd class="col-sm-9">{{$customer->contact }}</dd>

                    <dt class="col-sm-3">email</dt>
                    <dd class="col-sm-9">{{$customer->email }}</dd>

                    <dt class="col-sm-3">address</dt>
                    <dd class="col-sm-9">{{$customer->address }}</dd>

                  </dl>
                <div class="card-footer ml-auto mr-auto">
                    <a type="button" class="btn btn-info"
                       href="{{route('admin.customerindex')}}">
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

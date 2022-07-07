@extends('masters.newmaster')

@section('main')
  <div class="content">
    @include('partials.ErrorsAll')
    @include('partials.sessionmessage')
    @include('partials.allmessage')
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Customer</h4>
              <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="#" class="btn btn-sm btn-primary">Add user</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                  <th>
                    Name
                  </th>
                  <th>
                    Date Of Birth
                  </th>
                  <th>
                    Detail
                  </th>
                  <th>
                    Edit
                  </th>
                  </thead>
                  <tbody>
                  @foreach($customer as $a)
                    <tr>
                      <td>
                        {{$a->name}}
                      </td>
                      <td>
                        {{$a->dob}}
                      </td>
                      <td>
                        <a type="button" class="btn btn-info btn-sm"
                           href="{{route('admin.showcustomer',['id' => $a->CusID])}}">
                          <span class="material-icons">visibility</span>
                        </a>
                      </td>
                      <td class="text-primary">
                        <a type="button" class="btn btn-success btn-sm"
                           href="{{route('admin.editcustomer',['id' => $a->CusID])}}">
                          <span class="material-icons">edit</span>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection

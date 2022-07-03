@extends('masters.adminmaster')
@section('main')
    @include('partials.allmessage')
      <div class="card-body">
        <div class="card mb-4">
          <div class="card-header">
            <h2>Admin Index</h2>
          </div>
          <div class="card-body" >
            <div class="dataTable-container">
              <table id="datatablesSimple" class="dataTable-table table-danger">
                <thead>
                <tr>
                  <th data-sortable="" style="width: 19.6495%;"><a>Username</a></th>
                  <th data-sortable="" style="width: 28.9432%;"><a>Name</a></th>
                  <th data-sortable="" style="width: 15.5337%;">&nbsp;</th>
                  <th data-sortable="" style="width: 9.16091%;">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @foreach($admin as $a)
                  <tr>
                    <td>{{$a->username}}</td>
                    <td>{{$a->name}}</td>
                    <td><a type="button" class="btn btn-info btn-sm"
                           href="{{route('admin.showadmin', ['username' => $a->username])}}">
                        <i class="bi bi-eye"></i>
                      </a>
                    </td>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('admin.editadmin', ['username' => $a->username])}}">
                        <i class="bi bi-pencil-square"></i>
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
    </section>


@endsection

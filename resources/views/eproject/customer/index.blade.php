@extends('masters.adminmaster')

@section('main')
    @include('partials.allmessage')
  <div class="card-body">
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        <h2>Customer Index</h2>
      </div>
      <div class="card-body">
        <div class="dataTable-container">
          <table id="datatablesSimple" class="dataTable-table table-success">
            <thead>
            <tr>
              <th data-sortable="" style="width: 28.9432%;"><a>Customer name</a></th>
              <th data-sortable="" style="width: 15.5337%;">dob</th>
              <th data-sortable="" style="width: 9.16091%;">&nbsp;</th>
              <th data-sortable="" style="width: 9.16091%;">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customer as $a)
              <tr>
                <td>{{$a->name}}</td>
                <td>{{$a->dob}}</td>
                <td><a type="button" class="btn btn-info btn-sm"
                       href="{{route('admin.showcustomer',['id' => $a->CusID])}}">
                    <i class="bi bi-eye"></i>
                  </a>
                </td>
                <td><a type="button" class="btn btn-success btn-sm"
                       href="{{route('admin.editcustomer',['id' => $a->CusID])}}">
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
@endsection

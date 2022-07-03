@extends('masters.adminmaster')

@section('main')
  @include('partials.allmessage')
  <div class="card-body">
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        <h2>Stylist Index</h2>
      </div>
      <div class="card-body">
        <div class="dataTable-container">
          <table id="datatablesSimple" class="dataTable-table table-info">
            <thead>
            <tr>
              <th data-sortable="" style="width: 19.6495%;"><a>Name</a></th>
              <th data-sortable="" style="width: 28.9432%;"><a>dob</a></th>
              <th data-sortable="" style="width: 15.5337%;">&nbsp;</th>
              <th data-sortable="" style="width: 9.16091%;">&nbsp;</th>
              <th data-sortable="" style="width: 9.16091%;">&nbsp;</th>
            </tr>
            </thead>
    <tbody>
    @foreach($stylist as $a)
      <tr>
        <td>{{$a->name}}</td>
        <td>{{$a->dob}}</td>
        <td><a type="button" class="btn btn-info btn-sm"
               href="{{route('admin.showstylist', ['id'=> $a->SID])}}">
            <i class="bi bi-eye"></i>
          </a>
        </td>
        <td><a type="button" class="btn btn-success btn-sm"
               href="{{route('admin.editstylist', ['id' => $a->SID])}}">
            <i class="bi bi-pencil-square"></i>
          </a>
        </td>
        <td><a type="button" class="btn btn-danger btn-sm"
               href="{{route('admin.confirmstylist', ['id' => $a->SID])}}">
            <i class="bi bi-trash3"></i>
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
@endsection



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
              <h4 class="card-title ">Stylist</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{route('admin.createstylist')}}" class="btn btn-sm btn-primary">Add Stylist</a>
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
                    Contact
                  </th>
                  <th>
                    Detail
                  </th>
                  <th>
                    Edit
                  </th>
                  <th>
                    Delete
                  </th>
                  </thead>
                  <tbody>
                  @foreach($stylist as $s)
                    <tr>
                      <td>
                        {{$s->name}}
                      </td>
                      <td>
                        {{$s->dob}}
                      </td>
                      <td>
                        {{$s->contact}}
                      </td>
                      <td>
                        <a type="button" class="btn btn-info btn-sm"
                           href="{{route('admin.showstylist',['id' => $s->SID])}}">
                          <span class="material-icons">visibility</span>
                        </a>
                      </td>
                      <td class="text-primary">
                        <a type="button" class="btn btn-success btn-sm"
                           href="{{route('admin.editstylist',['id' => $s->SID])}}">
                          <span class="material-icons">edit</span>
                        </a>
                      </td>
                      <td class="text-primary">
                        <a type="button" class="btn btn-danger btn-sm"
                           href="{{route('admin.deletestylist',['id' => $s->SID])}}">
                          <span class="material-icons">delete</span>
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

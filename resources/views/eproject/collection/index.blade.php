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
              <h4 class="card-title ">Collection</h4>
              <p class="card-category"> Here is a subtitle for this table</p>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{route('admin.createcollection')}}" class="btn btn-sm btn-primary">Add Collection</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                  <th>
                    Name
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
                  @foreach($collection as $c)
                    <tr>
                      <td>
                        {{$c->name}}
                      </td>
                      <td>
                        <a type="button" class="btn btn-info btn-sm"
                           href="{{route('admin.showcollection',['id' => $c->CollectionID])}}">
                          <span class="material-icons">visibility</span>
                        </a>
                      </td>
                      <td>
                        <a type="button" class="btn btn-success btn-sm"
                           href="{{route('admin.editcollection',['id' => $c->CollectionID])}}">
                          <span class="material-icons">edit</span>
                        </a>
                      </td>
                      <td>
                        <a type="button" class="btn btn-danger btn-sm"
                             href="{{route('admin.confirmcollection', ['id'=> $c->CollectionID])}}">
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

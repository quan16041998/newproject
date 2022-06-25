@extends('masters.adminmaster')
@section('main')
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <div class="row">
          <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
              <div class="card-body">Customer Manager</div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{route('admin.customerindex')}}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
              <div class="card-body">Stylist Manager</div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{route('admin.stylistindex')}}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
              <div class="card-body">Product Manager</div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{route('admin.productindex')}}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
              <div class="card-body">Collection Manager</div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="{{route('admin.collectionindex')}}">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-6">
            <div class="card mb-4">
              <div class="card-header">
                <div class="text-center">Top Sell</div>
              </div>
              <div>

              </div>
              <div class="card-body">
                <canvas id="myAreaChart" width="941" height="376" style="display: block; height: 301px; width: 753px;"
                        class="chartjs-render-monitor">
                </canvas></div>
              <div class="card-footer small text-muted">Updated yesterday at 15:04 PM</div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="card mb-4">
              <div class="card-header">
                <div class="text-center">Top Sell</div>
              </div>
              <div>

              </div>
              <div class="card-body">
                <canvas id="myAreaChart" width="941" height="376" style="display: block; height: 301px; width: 753px;"
                        class="chartjs-render-monitor">
                </canvas></div>
              <div class="card-footer small text-muted">Updated yesterday at 20:03 PM</div>
            </div>
          </div>
        </div>
        <div class="container">
    @include('partials.allmessage')
    <section class="page-section" id="index">
      <div class="card-body">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Admin Manager
          </div>
          <div class="card-body" >
            <div class="dataTable-container">
              <table id="datatablesSimple" class="dataTable-table">
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
              <td><a type="button" class="btn btn-primary btn-sm"
                     href="{{route('admin.showadmin', ['username' => $a->username])}}">
                  Show</a>
              </td>
              <td><a type="button" class="btn btn-success btn-sm"
                     href="{{route('admin.editadmin', ['username' => $a->username])}}">
                  Edit
                </a></td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
          </div>
        </div>
      </div>
    </section>
    </div>
  </div>
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright © Your Website 2022</div>
            <div>
              <a href="#">Privacy Policy</a>
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>

@endsection

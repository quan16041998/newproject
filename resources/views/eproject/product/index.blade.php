@extends('masters.adminmaster')

@section('main')
  <div class="card-body">
      @include('partials.allmessage')
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        <h2>Product Index</h2>
      </div>
      <div class="card-body">
        <div class="dataTable-container">
          <table id="datatablesSimple" class="dataTable-table table-striped">
            <thead>
            <tr>
              <th data-sortable="" style="width: 28.9432%;"><a>Product Code</a></th>
              <th data-sortable="" style="width: 15.5337%;">Price(USD)</th>
              <th data-sortable="" style="width: 9.16091%;">&nbsp;</th>
              <th data-sortable="" style="width: 9.16091%;">&nbsp;</th>
              <th data-sortable="" style="width: 9.16091%;">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $p)
                @php
                    $price = number_format($p->price);
                    $img = '/images/product/'
                @endphp
                <td data-toggle="tooltip"  data-placement="right" data-html="true"
                    title="Images<image width='300px' height='400px' src='{{asset($img.$p->urlimg)}}'/>">
                  {{$p->product_code}}
                </td>
                <td>{{$p->price}}</td>
                <td><a type="button" class="btn btn-info btn-sm"
                       href="{{route('admin.showproduct', ['id' => $p->CID])}}">
                    <i class="bi bi-eye"></i>
                  </a>
                </td>
                <td><a type="button" class="btn btn-success btn-sm"
                       href="{{route('admin.editproduct', ['id' => $p->CID])}}">
                    <i class="bi bi-pencil-square"></i>
                  </a>
                </td>
                <td><a type="button" class="btn btn-danger btn-sm"
                       href="{{route('admin.confirmproduct', ['id' => $p->CID])}}">
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
@endsection
@section('script')
    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
@endsection

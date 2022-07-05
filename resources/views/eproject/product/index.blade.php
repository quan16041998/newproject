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
                            <h4 class="card-title ">Product Table</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{route('admin.createproduct')}}" class="btn btn-sm btn-primary">Add Product</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        Product_Code
                                    </th>
                                    <th>
                                        price $
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
                                    @foreach($product as $p)
                                        @php
                                            $price = number_format($p->price);
                                            $img = 'images/product/'
                                        @endphp
                                        <tr>
                                            <td data-toggle="tooltip"  data-placement="right" data-html="true"
                                                title="Images<image width='300px' height='400px' src='{{asset($img.$p->urlimg)}}'/>">
                                                {{$p->product_code}}
                                            </td>
                                            <td>
                                                {{$p->price}}
                                            </td>
                                            <td>
                                                <a type="button" class="btn btn-info btn-sm"
                                                   href="{{route('admin.showproduct',['id' => $p->CID])}}">
                                                    <span class="material-icons">visibility</span>
                                                </a>
                                            </td>
                                            <td class="text-primary">
                                                <a type="button" class="btn btn-success btn-sm"
                                                   href="{{route('admin.editproduct',['id' => $p->CID])}}">
                                                    <span class="material-icons">edit</span>
                                                </a>
                                            </td>
                                            <td class="text-primary">
                                                <a type="button" class="btn btn-danger btn-sm"
                                                   href="{{route('admin.deleteproduct',['id' => $p->CID])}}">
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
@section('script')

@endsection

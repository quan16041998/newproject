@extends('masters.viewC1master')
@section('main')

    <dl class="row">
        <div class="col-sm-6">
            <dt class="col-sm-3">Stylist name</dt>
            <dd class="col-sm-9">{{ $stylist->name }}</dd>

            <dt class="col-sm-3">Date of birth</dt>
            <dd class="col-sm-9">{{ $stylist->dob }}</dd>

            <dt class="col-sm-3">Contact</dt>
            <dd class="col-sm-9">{{$stylist->contact }}</dd>

            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{$stylist->email }}</dd>

            <dt class="col-sm-3">History</dt>
            <dd class="col-sm-9">{{$stylist->history }}</dd>

            <dt class="col-sm-3">Collection</dt>
            <dd class="col-sm-9"><a href="{{route('viewC1.viewcollection')}}"></a></dd>
        </div>

        <div class="col-sm-6">
            <img src="{{asset("images/stylist/".$stylist->urlimg)}}" width="400" height="500">
        </div>



    </dl>


@endsection



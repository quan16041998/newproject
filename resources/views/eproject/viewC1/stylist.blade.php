@extends('masters.viewC1master')
@section('main')
    <section class="py-5 bg-light" style="background: url({{asset("images/phong/phong3.jpg")}})">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="h2 text-uppercase mb-0" style="color: #dcb14a;">{{$stylistname->name}}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container p-0">
            <div class="row">
                <!-- SHOP SIDEBAR-->
                @include('eproject.viewC1.sidebar')
    <dl class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0 row">
        <div class="col-sm-7 row">
            <dt class="col-sm-4">Stylist name</dt>
            <dd class="col-sm-8">{{ $stylistname->name }}</dd>

            <dt class="col-sm-4">Date of birth</dt>
            <dd class="col-sm-8">{{ $stylistname->dob }}</dd>

            <dt class="col-sm-4">Contact</dt>
            <dd class="col-sm-8">{{$stylistname->contact }}</dd>

            <dt class="col-sm-4">Email</dt>
            <dd class="col-sm-8">{{$stylistname->email }}</dd>

            <dt class="col-sm-4">History</dt>
            <dd class="col-sm-8">{{$stylistname->history }}</dd>

            <dt class="col-sm-4"></dt>
            <dd class="col-sm-8">
                <a href="{{route('viewC1.viewstylist', ['id' => $stylistname->SID,'offset'=>0])}}">View Collection--></a>

            </dd>

        </div>
        <div class="col-sm-5">
            <img src="{{asset("images/stylist/".$stylistname->urlimg)}}" width="400" height="500">
        </div>




    </dl>


@endsection



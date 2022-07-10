@extends('masters.viewC1master')
@section('main')


    <!-- HERO SECTION-->
    <div class="container">
        <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url({{asset("images/phong/phong09.webp")}})" src="{{asset('images/logo/logo1.png')}}">
            <div class="container py-5">
                <div class="row px-4 px-lg-5">
                    <div class="col-lg-6">
                        <p class="text-muted small text-uppercase mb-2" style="color: #dcb14a;">New Inspiration 2022</p>
                        <h1 class="h2 text-uppercase mb-3" style="color: #dcb14a;">20% off on new season</h1>
                        <a class="btn btn-dark" href="{{route('viewC1.shop', ['offset'=>0])}}">Browse collections</a>
                    </div>
                </div>
            </div>
        </section>


        <!-- CATEGORIES SECTION-->
        <section class="mx-auto my-5 text-center">
            <header class="text-center">
                <p class="small text-muted small text-uppercase mb-1">Hot collections</p>
                <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
            </header>
            <div class="row">
                @foreach($collection as $c)
                <div class="col-md-3"><a class="category-item" href="{{route('viewC1.viewcollection', ['id' => $c->CollectionID,'offset'=>0    ])}}">
                        <img   width="200px"  height="250px" src="{{asset("images/collection/".$c->urlimg)}}" alt=""/>
                        <strong class="category-item-title">{{$c->name}}</strong></a>
                </div>
                @endforeach
            </div>
        </section>
        <section class="mx-auto my-5 container-fluid text-center">
            <header class="text-center">
                <p class="small text-muted small text-uppercase mb-1">Hot Stylist</p>
                <h2 class="h5 text-uppercase mb-4">Browse our Stylist</h2>
            </header>
            <div class="row">
                @foreach($stylist as $s)
                    <div class="col-lg-4"><a class="category-item" href="{{route('viewC1.stylist', ['id' => $s->SID])}}">
                            <img   width="200px"  height="250px" src="{{asset("images/stylist/".$s->urlimg)}}" alt=""/>
                            <strong class="category-item-title ">{{$s->name}}</strong></a>
                    </div>
                @endforeach
            </div>
        </section>

{{--       Slide--}}



        @endsection
@section('script')
    <script>
        $('#productView').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
        $('.carousel').carousel()
    </script>
@endsection

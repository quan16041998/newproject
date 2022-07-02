@extends('masters.viewC1master')
<div class="container">
    <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url({{asset("images/phong/phong09.webp")}})" src="{{asset('images/logo/logo1.png')}}">
        <div class="container py-5">
            <div class="row px-4 px-lg-5">
                <div class="col-lg-6">
                    <p class="text-muted small text-uppercase mb-2" style="color: #dcb14a;">New Inspiration 2022</p>
                    <h1 class="h2 text-uppercase mb-3" style="color: #dcb14a;">20% off on new season</h1>
                    <a class="btn btn-dark" href="{{route('viewC1.shop')}}">Browse collections</a>
                </div>
            </div>
        </div>
    </section>

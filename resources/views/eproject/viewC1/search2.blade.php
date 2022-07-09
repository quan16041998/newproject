@extends('masters.viewC1master')
@section('main')
    >
    <div class="container">
        @include('partials.sessionmessage')
        @include('partials.modal')
        <!-- HERO SECTION-->
        <section class="py-5 bg-light" style="background: url({{asset("images/phong/phong01.webp")}})">
            <div class="container">
                <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="h2 text-uppercase mb-0" style="color: #dcb14a;">Search</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5">
            <div class="container p-0">
                <div class="row">
                    <!-- SHOP SIDEBAR-->
                    @include('eproject.viewC1.sidebar')
                    <!-- SHOP LISTING-->
                    <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                        <div class="row mb-3 align-items-center">
                            <div class="col-lg-6 mb-2 mb-lg-0">
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                                    <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="fas fa-th-large"></i></a></li>
                                    <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="fas fa-th"></i></a></li>
                                    <li class="list-inline-item">
                                        <select class="selectpicker" data-customclass="form-control form-control-sm">
                                            <option value>Sort By </option>
                                            <option value="low-high">Price: Low to High </option>
                                            <option value="high-low">Price: High to Low </option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <h2>No information</h2>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
    <script>
        $('#sosanh').modal()
    </script>
@endsection

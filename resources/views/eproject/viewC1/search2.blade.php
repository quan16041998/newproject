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
                    <div class="col-lg-3 order-2 order-lg-1">
                        <h5 class="text-uppercase mb-4">Categories</h5>
                        <div class="py-2 px-4 bg-dark text-white mb-3"><strong class="small text-uppercase fw-bold">Fashion &amp; Acc</strong></div>
                        <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                            @foreach($collection as $c)
                                <li class="mb-2"><a class="reset-anchor" href="{{route('viewC1.viewcollection', ['id' => $c->CollectionID])}}">{{$c->name}}</a></li>
                            @endforeach
                        </ul>
                        <h5 class="text-uppercase mb-4">Stylist</h5>
                        <ul class="list-unstyled small text-muted ps-lg-4 font-weight-normal">
                            @foreach($stylist as $s)
                                <li class="mb-2"><a class="reset-anchor" href="{{route('viewC1.viewstylist', ['id' => $s->SID])}}">{{$s->name}}</a></li>
                            @endforeach
                        </ul>
                        <h6 class="text-uppercase mb-3">Show only</h6>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="checkbox" id="checkbox_1">
                            <label class="form-check-label" for="checkbox_1">Returns Accepted</label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="checkbox" id="checkbox_2">
                            <label class="form-check-label" for="checkbox_2">Returns Accepted</label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="checkbox" id="checkbox_3">
                            <label class="form-check-label" for="checkbox_3">Completed Items</label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="checkbox" id="checkbox_4">
                            <label class="form-check-label" for="checkbox_4">Sold Items</label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="checkbox" id="checkbox_5">
                            <label class="form-check-label" for="checkbox_5">Deals &amp; Savings</label>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="checkbox_6">
                            <label class="form-check-label" for="checkbox_6">Authorized Seller</label>
                        </div>
                        <h6 class="text-uppercase mb-3">Buying format</h6>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="customRadio" id="radio_1">
                            <label class="form-check-label" for="radio_1">All Listings</label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="customRadio" id="radio_2">
                            <label class="form-check-label" for="radio_2">Best Offer</label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="customRadio" id="radio_3">
                            <label class="form-check-label" for="radio_3">Auction</label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="customRadio" id="radio_4">
                            <label class="form-check-label" for="radio_4">Buy It Now</label>
                        </div>
                    </div>
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

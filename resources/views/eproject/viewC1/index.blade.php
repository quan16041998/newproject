@extends('masters.viewC1master')
@section('main')
    <!--  Modal -->
    <div class="modal fade" id="productView" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content overflow-hidden border-0">
                <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-0">
                    <div class="row align-items-stretch">
                        <div class="col-lg-6 p-lg-0"><a class="lightbox product-view d-block h-100 bg-cover bg-center" style="background: url(public/images/product/00001-burberry-fall-2022-menswear-credit-brand.webp)" href="{{asset('images/product/00001-burberry-fall-2022-menswear-credit-brand.webp')}}" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="public/images/product/00001-burberry-fall-2022-menswear-credit-brand.webp" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="public/images/product/00001-burberry-fall-2022-menswear-credit-brand.webp" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
                        <div class="col-lg-6">
                            <div class="p-4 my-md-4">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                                    <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                                    <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                                    <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                                    <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                                </ul>
                                <h2 class="h4">01 - Burberry fall menswear</h2>
                                <p class="text-muted">$250</p>
                                <p class="text-sm mb-4">Chaos—the distintegration of norms and boundaries, social and fashion-wise—has reveberated through the ways shows have been done and undone this season. Riccardo Tisci served up his own multi-messaging version of it for Burberry in London—a massive real-life event held at London’s Central Hall Westminster. That is, right across from the Houses of Parliament, a seat of European democracy where, to quote Shakespeare, “Chaos is come again.”
                                    People stood massed together in the dark, un-ranked, unmasked, shuffling back to give way to Riccardo Tisci’s supermodels, friends, and artist-celebrities as they descended from somewhere high up in the wood-paneled auditorium. Clad in the spectrum of Tisci’s ideas about global, generational, and gender non-conforming realities, British tradition and, of course, Burberry checks and trenches, they climbed up to pose on tables which were set with silver and crystal, as if for a country-house dinner. A hundred-strong choir sang, an orchestra played.
                                    “It’s a reconstructed collection of what I find in Burberry, and what I’ve been living as human in this moment in Britain too,” Tisci said before the show. “It’s a different perspective—you know, the way you feel things was a very deep different journey.” That stood as an explanation for the leveling, everyone-together breaking of catwalk convention, except that the event simultaneously managed to be a bombastic reclaiming of Burberry’s corporate position, a landmark of the British fashion business with global reach.</p>
                                <div class="row align-items-stretch mb-4 gx-0">
                                    <div class="col-sm-7">
                                        <div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                            <div class="quantity">
                                                <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                                <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                                <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="{{route('viewC1.cart')}}">Add to cart</a></div>
                                </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#"><i class="far fa-heart me-2"></i>Add to wish list</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- HERO SECTION-->
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


        <!-- CATEGORIES SECTION-->
        <section class="mx-auto my-5 text-center">
            <header class="text-center">
                <p class="small text-muted small text-uppercase mb-1">Hot collections</p>
                <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
            </header>
            <div class="row">
                @foreach($collection as $c)
                <div class="col-md-3"><a class="category-item" href="{{route('viewC1.shop')}}">
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
                    <div class="col-lg-4"><a class="category-item" href="{{route('viewC1.shop')}}">
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

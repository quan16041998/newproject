<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boutique | Ecommerce bootstrap template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- gLightbox gallery-->
    <link rel="stylesheet" href="vendor/glightbox/css/glightbox.min.css">
    <!-- Range slider-->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- Swiper slider-->
    <link rel="stylesheet" href="vendor/swiper/swiper-bundle.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset("css/style.default.css")}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset("css/custom.css")}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('images/ViewC1/favicon.png')}}">
</head>
<body>
<div class="page-holder">
    <!-- navbar-->
    <header class="header bg-white">
        <div class="container px-lg-3">
            <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="{{route('viewC1.index')}}"><span class="fw-bold text-uppercase text-dark">Boutique</span></a>
                <button class="navbar-toggler navbar-toggler-end" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <!-- Link--><a class="nav-link active" href="{{route('viewC1.index')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <!-- Link--><a class="nav-link" href="{{route('viewC1.shop')}}">Shop</a>
                        </li>
                        <li class="nav-item dropdown"><a type="button" class="nav-link dropdown-toggle" id="pagesDropdown"
                                                         href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Collection</a>
                            <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown">
                                <a class="dropdown-item border-0 transition-link" href="{{route('viewC1.index')}}">View All</a>
                                <a class="dropdown-item border-0 transition-link" href="{{route('viewC1.shop')}}">View Collection</a>
                              </div>

                        </li>
                        <li class="nav-item dropdown"><a type="button" class="nav-link dropdown-toggle" id="pagesDropdown"
                                                         href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Stylist</a>
                            <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown">
                                <a class="dropdown-item border-0 transition-link" href="{{route('viewC1.index')}}">View All</a>
                                <a class="dropdown-item border-0 transition-link" href="{{route('viewC1.shop')}}">View Stylist</a>
                            </div>

                        </li>

                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item "><a class="nav-link" href="{{route('viewC1.cart')}}"> <i class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small class="text-gray fw-normal">(2)</small></a></li>
                        <li class="nav-item "><a class="nav-link" href="#!"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Login</a></li>
                    </ul>
{{--                    <div class="col-lg-2 input-group-sm">--}}
{{--                        <form class="form-inline row">--}}
{{--                            <input class="form-control-sm " type="search" placeholder="Product Code" aria-label="Search"  aria-label="Recipient's username" aria-describedby="basic-addon2">--}}
{{--                        </form>--}}
{{--                    </div>--}}
                    <div class="input-group mb-3 col-lg-2">
                        <input type="text" class="form-control form-control-sm" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</div>
<div class="row">
    <div class="col-8">

    </div>
    <div class="col-4">

    </div>
</div>


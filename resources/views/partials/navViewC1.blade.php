
<div class="page-holder">
    <!-- navbar-->
    <header class="header bg-white">
        <div class="container px-lg-3">
            <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="{{route('viewC1.index')}}"><img  class="img-fluid" src="{{asset("images/logo/logo1.png")}}" alt="Logo" style="width:80px"></a>
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
                    <form class="input-group mb-3 col-lg-2 form-inline" method="get" action="{{route('viewC1.search')}}">
                        <input type="text" class="form-control form-control-sm " placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary btn-sm" type="button"><i class="bi-search"></i></button>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </header>
</div>



<div class="header mb-5">
    <nav class="navbar navbar-expand-md  fixed-top  mb-2 text-black "  style="background-image: url('public/images/phong/phong15.jpg');">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="bookDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Admin Manager
                        </a>
                        <div class="dropdown-menu" aria-labelledby="bookDropdown">
                            <a class="dropdown-item" href="{{route('admin.adminindex')}}">View All</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="formatDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Customer Manager
                        </a>
                        <div class="dropdown-menu" aria-labelledby="formatDropdown">
                            <a class="dropdown-item" href="{{route('admin.customerindex')}}">View All</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="publisherDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Stylist Manager
                        </a>
                        <div class="dropdown-menu" aria-labelledby="publisherDropdown">
                            <a class="dropdown-item" href="{{route('admin.stylistindex')}}">View All</a>
                            <a class="dropdown-item" href="{{route('admin.createstylist')}}">New Stylist</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="formatDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Product Manager
                        </a>
                        <div class="dropdown-menu" aria-labelledby="formatDropdown">
                            <a class="dropdown-item" href="{{route('admin.productindex')}}">View All</a>
                            <a class="dropdown-item" href="{{route('admin.createproduct')}}">New Product</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="formatDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Collection Manager
                        </a>
                        <div class="dropdown-menu" aria-labelledby="formatDropdown">
                            <a class="dropdown-item" href="{{route('admin.collectionindex')}}">View All</a>
                            <a class="dropdown-item" href="{{route('admin.createcollection')}}">New Collection</a>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav mr-auto" style="float: right">
                <li class="nav-item mr-3" style="float: right">
                    <a class="nav-link" href="#">
                        <i class="bi bi-person"></i>
                        {{\Illuminate\Support\Facades\Session::has('username')?
                            \Illuminate\Support\Facades\Session::get('username') : ''}}
                    </a>
                </li>
                <li class="nav-item" style="float: right">
                    <a class="nav-link" href="{{route('admin.signout')}}">
                        <i class="bi bi-box-arrow-left"></i>
                        Logout
                    </a>
                </li>
            </ul>
            </ul>
        </div>
    </nav>

</div>

<nav class="navbar navbar-expand-md navbar-dark fixed-top nav-bg-color">
  <div class="container">

    <a class="navbar-brand" href="{{route('pie.index')}}">
      <img src="{{asset('images/pie.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
      Bethany's Pie Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('pie.index')}}">Home </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            Pies
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('pie.allpies')}}">Fruit pies</a>
            <a class="dropdown-item" href="{{route('pie.allpies')}}">Cheese cakes</a>
            <a class="dropdown-item" href="{{route('pie.allpies')}}">Seasonal pies</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('pie.allpies')}}">All pies</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('pie.order')}}">Order</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

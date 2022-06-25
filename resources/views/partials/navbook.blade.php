
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class=" nav-brand text-light" href="{{route('book.indexbook')}}">BookWorm</a>
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbardrop1" data-toggle="dropdown">Books</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('book.indexbook')}}">View All</a>
                <a class="dropdown-item" href="{{route('book.new')}}">New Books</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbardrop2" data-toggle="dropdown">Pulishers</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('book.indexbook')}}">View All</a>
                <a class="dropdown-item" href="{{route('book.new')}}">New Books</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbardrop3" data-toggle="dropdown">Format</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{route('book.indexbook')}}">View All</a>
                <a class="dropdown-item" href="{{route('book.new')}}">New Books</a>
            </div>
        </li>
    </ul>
</nav>

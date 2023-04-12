<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('dist/img/logo/logo.png') }}" width="38" class="d-inline-block ms-2" alt="page logo">
    </a>
    <form class="form-inline">
        <input class="form-control mr-sm-4 rounded" type="search" placeholder="Search" aria-label="Search">
    </form>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="ms-auto me-3">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/product">Purchase</a>
                    <a class="nav-link" href="#">Promo</a>
                    <a class="nav-link" href="/home">Stock Up</a>
                    <a class="nav-link" href="{{route('admin.logout')}}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

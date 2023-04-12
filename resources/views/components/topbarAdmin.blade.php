<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('dist/img/logo/logo.png') }}" width="38" class="d-inline-block ms-2" alt="page logo">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="ms-auto me-3">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                    <a class="nav-link" href="{{route('product')}}">Product Management</a>
                    <a class="nav-link" href="{{route('stock')}}">Stock Management</a>
                    <a class="nav-link" href="{{route('adminLogout')}}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

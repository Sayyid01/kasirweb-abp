<!DOCTYPE html>
<html lang="en">

<head>
    {{-- head --}}
    @include('components.head')
</head>

<body id="page-top">
    <div id="wrapper">

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                {{-- topbar --}}
                @include('components.topbar')

                {{-- container fluid --}}
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('title-2')</li>
                        </ol>
                    </div>

                    {{-- Main content --}}
                    @yield('content')

                    {{-- Modal Logout --}}
                    {{-- @include('components.modal-logout') --}}
                </div>
            </div>

            {{-- Footer --}}
            @include('components.footer')
        </div>
    </div>

    @include('components.scripts')
</body>

</html>

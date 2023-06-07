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
                @include('components.topbarKasir')

                {{-- container fluid --}}
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Product</a></li>
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

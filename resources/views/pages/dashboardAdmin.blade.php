<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <section class="hv-100">
        <div class="container">
            <h1>Welcome Admin</h1>
            <h2>HH:MM:SS</h2>
        </div>
        <div class="container justify-content-center">
            <ul>
                <li><a class="nav-link" href="{{ route('product') }}">Product Management</a></li>
                <li><a class="nav-link" href="{{ route('stock') }}">Stock Management</a></li>
                <li><a class="nav-link" href="{{ route('adminLogout') }}">Logout</a></li>
            </ul>
        </div>
    </section>
</body>

</html>

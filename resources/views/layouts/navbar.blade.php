<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewel Dyna Oralcare</title>
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link rel="icon" href="{{ asset('assets/image/logo.png') }}" type="image/x-icon">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="position: relative;">
    <div class="container-fluid">
        <img src="{{ asset('assets/image/logo.png') }}" alt="Logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse p-0" id="navbarNav">
            <div class="me-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div>
                        <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                           aria-current="page">Home</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div>
                        <a href="{{ url('/about_us') }}"
                           class="nav-link {{ request()->is('about_us') ? 'active' : '' }}">About Us</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div>
                        <a href="{{ url('/product') }}" class="nav-link {{ request()->is('product') ? 'active' : '' }}">Product</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div>
                        <a href="{{ url('/address')}}" class="nav-link {{ request()->is('address') ? 'active' : '' }}">Address</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="content">
    @yield('content')
</div>
</body>

</html>
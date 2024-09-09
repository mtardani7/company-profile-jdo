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
    <nav class="navbar navbar-expand-lg bg-dark" style="position: fixed">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar w/ text</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    Navbar text with an inline element
                </span>
            </div>
        </div>
    </nav>
    {{-- <nav class="navbar" style="position: fixed;">
        <img src="{{ asset('assets/image/logo.png') }}" alt="Logo">
        <ul>
            <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ url('/about_us') }}" class="{{ request()->is('about_us') ? 'active' : '' }}">About Us</a>
            </li>
            <li><a href="{{ url('/product') }}" class="{{ request()->is('product') ? 'active' : '' }}">Product</a></li>
            <li><a href="{{ url('/address') }}" class="{{ request()->is('address') ? 'active' : '' }}">Address</a></li>
        </ul>
    </nav> --}}

    <div class="content">
        @yield('content')
    </div>
</body>

</html>

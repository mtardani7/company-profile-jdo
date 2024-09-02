<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
</head>

<body>
    <nav class="navbar" style="position: fixed;">
        <img src="{{ asset('assets/image/logo.png') }}" alt="Logo">
        <ul>
            <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ url('/about_us') }}" class="{{ request()->is('about_us') ? 'active' : '' }}">About Us</a> </li>
            <li><a href="{{ url('/product') }}" class="{{ request()->is('product') ? 'active' : '' }}">Product</a></li>
            <li><a href="{{ url('/address')}}" class="{{ request()->is('address') ? 'active' : '' }}">Address</a></li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>

</html>

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
            <li><a href="{{ url('/admin') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ url('/about_us') }}" class="{{ request()->is('about_us') ? 'active' : '' }}">About Us</a>
            </li>
            <li><a href="{{ url('/product') }}" class="{{ request()->is('product') ? 'active' : '' }}">Product</a></li>
            <li><a href="{{ url('/address') }}" class="{{ request()->is('address') ? 'active' : '' }}">Address</a></li>
            @auth
                <li>
                    <form action="{{ url('/logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn"
                            style="background: #1B9C85;">Logout</button>
                    </form>
                </li>
            @else
                <li><a href="{{ url('/login_admin') }}" class="btn">Login</a></li>
            @endauth
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>

</html>

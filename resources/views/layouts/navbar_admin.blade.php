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
    {{-- <nav class="navbar" style="position: fixed;">
        <img src="{{ asset('assets/image/logo.png') }}" alt="Logo">
        <ul>
            @auth
                <li><a href="{{ url('/home/admin') }}" class="{{ request()->is('home/admin') ? 'active' : '' }}">Home</a>
                </li>
                <li><a href="{{ url('/about_us/admin') }}"
                        class="{{ request()->is('about_us/admin') ? 'active' : '' }}">About Us</a></li>
                <li><a href="{{ url('/product/admin') }}"
                        class="{{ request()->is('product/admin') ? 'active' : '' }}">Product</a></li>
                <li><a href="{{ url('/address/admin') }}"
                        class="{{ request()->is('address/admin') ? 'active' : '' }}">Address</a></li>
                <li>
                    <form action="{{ url('/logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn" style="background: #1B9C85;">Logout</button>
                    </form>
                </li>
            @else
                <li><a href="{{ url('/admin') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ url('/about_us') }}" class="{{ request()->is('about_us') ? 'active' : '' }}">About Us</a>
                </li>
                <li><a href="{{ url('/product') }}" class="{{ request()->is('product') ? 'active' : '' }}">Product</a>
                </li>
                <li><a href="{{ url('/address') }}" class="{{ request()->is('address') ? 'active' : '' }}">Address</a>
                </li>
                <li><a href="{{ url('/login_admin') }}" class="btn">Login</a></li>
            @endauth
        </ul>
    </nav> --}}
    <nav class="navbar navbar-expand-lg navbar-dark" style="position: fixed;">
        <div class="container-fluid">
            <img src="{{ asset('assets/image/logo.png') }}" alt="Logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-0" id="navbarNav">
                <div class="me-auto"></div>
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item">
                            <div>
                                <a href="{{ url('/home/admin') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                    aria-current="page">Home</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div>
                                <a href="{{ url('/about_us/admin') }}"
                                    class="nav-link {{ request()->is('about_us') ? 'active' : '' }}">About Us</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div>
                                <a href="{{ url('/product/admin') }}"
                                    class="nav-link {{ request()->is('product') ? 'active' : '' }}">Product</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div>
                                <a href="{{ url('/address/admin') }}"
                                    class="nav-link {{ request()->is('address') ? 'active' : '' }}">Address</a>
                            </div>
                        </li>
                        <li>
                            <form action="{{ url('/logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn" style="background: #1B9C85;">Logout</button>
                            </form>
                        </li>
                    @else
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
                                <a href="{{ url('/product') }}"
                                    class="nav-link {{ request()->is('product') ? 'active' : '' }}">Product</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div>
                                <a href="{{ url('/address') }}"
                                    class="nav-link {{ request()->is('address') ? 'active' : '' }}">Address</a>
                            </div>
                        </li>
                        <li><a href="{{ url('/login_admin') }}" class="btn">Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>

</html>

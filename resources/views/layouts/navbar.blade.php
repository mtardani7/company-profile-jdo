<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
</head>
<body>
    <nav class="navbar">
        <img src="{{ asset('assets/image/logo.png') }}" alt="Logo">
        <ul>
            <li><a href="{{ url('/')}}" class="active">Home</a></li>
            <li><a href="{{ url('/about_us')}}">About Us</a></li>
            <li><a href="{{ url('/product')}}">Product</a></li>
            <li><a href="#">Address</a></li>
        </ul>
    </nav>
</body>
</html>

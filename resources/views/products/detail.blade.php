<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="{{ asset('css/trending.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <div class="navbar" style="padding: 2rem;">
        <div class="logo">
            <a href="/home"><img src="{{ asset('image/logo.png')}}"></a>
            <a href="/home"><img src="{{ asset('image/lo.png')}}"></a>
            <a href="/home"><img src="{{ asset('image/king.png')}}"></a>
        </div>
   
    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/shopping_cart">Cart</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <div class="nav-icon">
        <a href="/"><i class='bx bx-search'></i></a>
        <a href="/shopping_cart"><i class='bx bx-cart'></i></a>
    </div>
</div>
    <div class="container-fluid">
            @yield('content')
        </div>
</body>
</html>
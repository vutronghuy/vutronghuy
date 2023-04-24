<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    
</head>
<body>
     <div class="navbar">
        <div class="logo">
            <a href="/"><img src="image/logo.png"></a>
            <a href="/home"><img src="image/lo.png" ></a>
        <a href="/home"><img src="image/king.png" ></a>
        </div>
   
    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/cart">Cart</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <div class="nav-icons">
        <a href="/"><i class='bx bx-search'></i></a>
        <a href="/cart"><i class='bx bx-cart'></i></a>
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                aria-expanded="false">
                <a href="/login"><i class='bx bx-user'></i></a>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>
</div>


<section class="contact">
    <div class="contact-info">
        <div class="second">
            <img src="image/king.png" alt="">
        </div>
        <div class="second">
            <img src="image/lo.png" alt="">
        </div>
        <div class="first-info">
            <img src="image/logo.png" alt="">
            
            <p>136 Ho Tung Mau Street, <br>KFC Americans 76 fantom Street</p>
            <p>024667477663</p>
            <p>fastfood24@gmail.com</p>

            <div class="social-icon">
                <a href="/"><i class='bx bxl-facebook'></i></a>
                <a href="/"><i class='bx bxl-twitter'></i></a>
                <a href="/"><i class='bx bxl-instagram'></i></a>
                <a href="/"><i class='bx bxl-youtube'></i></a>
                <a href="/"><i class='bx bxl-linkedin'></i></a>
            </div>
        </div>
        <div class="second-info">
            <h4>Support</h4>
            <p>Contact us</p>
            <p>About page</p>
            <p>Privacy</p>
            <p>Question</p>
            <p>Policy</p>

        </div>
        <div class="five">
            <h4>Subcribe</h4>
            <p>Recive updates, hot pick, bestseller</p>
            <p>See you agains</p>
        </div>
    </div>
</section>

<div class="end-text">
    <p>Copyright by KFC @2023 VietNam</p>
</div>
</body>
</html>
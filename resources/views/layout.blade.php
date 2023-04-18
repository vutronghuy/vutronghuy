<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
    <link rel="icon" href="image/lo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/menu.css">

</head>
<body>
    {{-- header --}}
    <header>    
        <a href="/" class="logo"><img src="image/logo.png" alt=""></a>
        <a href="/home" class="lote"><img src="image/lo.png" alt=""></a>
        <a href="/home" class="buger"><img src="image/king.png" alt=""></a>
        <ul class="navmenu">
            <li><a href="/home">Home</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/">About</a></li>
            <li><a href="/cart">Cart</a></li>
            <li><a href="/">Contact</a></li>
        </ul>

        <div class="nav-icon">
            <a href="/"><i class='bx bx-search'></i></a>
            <a href="/"><i class='bx bx-user'></i></a>
            <a href="/cart"><i class='bx bx-cart'></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    {{-- main --}}
    <main>
        @yield('content')
    </main>

    {{-- footer --}}
    <footer>
        <section class="contact">
            <div class="contact-info">
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
    </footer>
</body>
</html>
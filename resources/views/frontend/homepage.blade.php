<!DOCTYPE html>
<html lang="en">

<head>
    <title>FastFood</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}} ">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="icon" href="image/king.png" type="image/x-icon">

</head>

<body>
    <header>
        <a href="/home" class="logo"><img src="image/logo.png" alt=""></a>
        <a href="/home" class="lote"><img src="image/lo.png" alt=""></a>
        <a href="/home" class="buger"><img src="image/king.png" alt=""></a>
        <ul class="navmenu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="/menu">Menu</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/cart">Cart</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>

        <div class="nav-icon">
            <form action="{{ route('search') }}" method="get" style="display:flex; ">
                <input type="text" name="query" placeholder="Search...">
                <button type="submit">
                    <i class="bx bx-search" style="padding: 4px;"></i>
                </button>
            </form> 
            <a href="/cart"><i class='bx bx-cart' style="margin-left: 10px; "></i></a>
        
        </div>
    </header>
    <section class="main-home">
        <div class="main-text">
            <h5>Tuesday</h5>
            <p>Sale off day</p>

            <a href="/menu" class="main-btn">Buy Now <i class='bx bx-right-arrow-alt'></i></a>
        </div>

        <div class="down-arrow">
            <a href="#trending" class="down"><i class='bx bxs-down-arrow-alt'></i></a>
        </div>
    </section>


    {{-- bestseller product --}}
    <section class="bestseller-product" id="trending">
        <div class="center-text">
            <h1> </h1>
            <h2>BestSeller <span>Products</span></h2>
        </div>

        <div class="products">
            {{-- product1 --}}
            <div class="row2">
                <img src="image/best.webp" alt="">
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                    <i class='bx bx-heart'></i>
                </div>
                <div class="price">
                    <h4>combo salat lover</h4>
                    <p>59.000 VND</p>
                </div>
            </div>
            {{-- product2 --}}
            <div class="row1">
                <img src="image/lover.jpeg" alt="">
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>burger king</h4>
                    <p>79.000 VND</p>
                </div>
            </div>
            {{-- product3 --}}
            <div class="row">
                <img src="image/nhom.jpg" alt="">
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                    <i class='bx bx-heart'></i>
                </div>
                <div class="price">
                    <h4>combo burger and Chicken</h4>
                    <p>101.000 VND</p>
                </div>
            </div>
            {{-- product4 --}}
            <div class="row">
                <img src="image/egg.jpg" alt="">
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="heart-icon1">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>combo egg tarts</h4>
                    <p>69.000 VND</p>
                </div>
            </div>
            {{-- product5 --}}
            <div class="row4">
                <img src="image/my.png" alt="">
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>combo spaghetti chicken</h4>
                    <p>91.000 VND</p>
                </div>
            </div>
            {{-- product6 --}}
            <div class="row3">
                <img src="image/Bugers.jpg" alt="">
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>Burger BBQ King</h4>
                    <p>70.000 VND</p>
                </div>
            </div>
            {{-- product7 --}}
            <div class="row">
                <a href="/trending"><img src="image/ga.jpg" alt=""></a>
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>combo Hoang Kim Chicken</h4>
                    <p>150.000 VND</p>
                </div>
            </div>
            {{-- product8 --}}
            <div class="row5">
                <img src="image/lote.png" alt="">
                <div class="product-text">
                    <h2>BestSellers</h2>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="price">
                    <h4>Loy Set</h4>
                    <p>140.000 VND</p>
                </div>
            </div>
        </div>
    </section>
    {{-- client reviews section --}}
    <section class="client-reviews">
        <div class="reviews">
            <h3>Client Reviews</h3>
            <img src="image/anh.jpg" alt="">
            <p>kfc good, i like it </p>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star'></i>
            <i class='bx bxs-star-half'></i>
            <h2>Thanh Cong</h2>
            <p>Student in Xay Dung</p>

        </div>
    </section>
    {{-- update new section --}}
    <section class="Update-news">
        <div class="up-center-text">
            <h2>New Updates</h2>
        </div>

        <div class="update-cart">
            <div class="cart">
                <img src="" alt="">
                <h5></h5>
            </div>
        </div>
    </section>
    {{-- contact section --}}\
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

    <script src="js/java.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>product detail</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/trending.css">
    <link rel="icon" href="image/lo.png" type="image/x-icon">
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
    <div class="nav-icon">
        <a href="/login"><i class='bx bx-user'></i></a>
        <a href="/cart"><i class='bx bx-cart'></i></a>
        <div class="bx bx-menu" id="menu-icon"></div>
    </div>
</div>


    <div class="container my-5 produce">
		<div class="row">
			<div class="col-md-6">
				<img src="image/ga.jpg"  class="img-fluid">
			</div>
			<div class="col-md-6">
				<h1>Chicken</h1>
				<p>Description of the product goes here. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Aliquam fringilla quam vel nisl faucibus,
                    ac elementum neque semper. Nulla facilisi. Mauris bibendum augue lectus,
                    sed placerat turpis rutrum sit amet. Nulla facilisi. Vivamus eu odio interdum,
                    tempus nulla eu, fringilla libero. </p>
				<p>Price: $99.99</p>
                  <div>
                      <select style="margin-bottom: 20px;">
                          <option>Select Size</option>
                          <option>Big</option>
                          <option>Normal</option>
                          <option>Small</option>
                      </select>
                      <input type="number" value="1">
                  </div>
                  <a href="" class="btn">Add To Cart</a>
            </div>
        </div>
    </div>
    {{-- title --}}
    <div class="small-container">
        <div class="row row-2"></div>
        <h2>Related Products</h2>
        <p>View More</p>
    </div>
    <section class="bestseller-product" id="bestseller">
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
                <div class="ratting">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
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
             <div class="row5">
                <img src="image/nhom.jpg" alt="">
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
                    <h4>combo burger and Chicken</h4>
                    <p>101.000 VND</p>
                </div>
            </div>
            {{-- product4 --}}
            <div class="row6">
                <img src="image/egg.jpg" alt="">
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
                    <h4>combo egg tarts</h4>
                    <p>69.000 VND</p>
                </div>
            </div>

        </div>
    </section>
    <div>

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

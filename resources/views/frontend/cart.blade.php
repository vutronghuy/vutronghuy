<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="css/product.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
<div class="cart" id="cart">
    <div class="title"></div><hr/>
    <div id="title"></div>
</div>
{{-- cart item detail --}}
  <div class="small-container cart-page">

    <table>
        <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
    </tr>
    <tr>
        <td>
            <div class="cart-info">
                <img src="image/ga.jpg" >
                <div>
                    <p>Chicken</p>
                    <small>Price: 100.000đ</small>
                    <br>
                    <a href="">Remove</a>
                </div>
            </div>
        </td>
        <td><input type="number" value="1"></td>
        <td>100.000đ</td>
    </tr>
    <tr>
        <td>
            <div class="cart-info">
                <img src="image/ga.jpg" >
                <div>
                    <p>Chicken</p>
                    <small>Price: 100.000đ</small>
                    <br>
                    <a href="">Remove</a>
                </div>
            </div>
        </td>
        <td><input type="number" value="1"></td>
        <td>100.000đ</td>
    </tr>
    </table>

    <div class="total-price">

        <table>
            <tr>
                <td>Subtotal</td>
                <td>200.000đ</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>20.000đ</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>220.000đ</td>
            </tr>
        </table>
    </div>



    </div>  

{{-- footer --}}
<section class="contact">
    <div class="contact-info">
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
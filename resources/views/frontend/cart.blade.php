<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cart</title>
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="navbar" style="padding: 2rem;">
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
            <li><a href="/shopping_cart">Cart</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <div class="nav-icon">
        <a href="/"><i class='bx bx-search'></i></a>
    </div>
</div>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Your Cart</h3>
            </div>
            <div class="card-body">

                @php
                    $totalPrice = 0;
                @endphp

                @if ($cartItems->count() != 0)
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $cartItem)
                                    <tr>
                                        <td>
                                            <img src="{{ $cartItem->product->imgage }}" alt="">
                                        </td>

                                        <td>{{ $cartItem->product->name }}</td>
                                        <td>{{ $cartItem->product->price }}$</td>
                                        <form action="{{ route('cart.update', $cartItem->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <td>
                                                <input type="number" name="quantity" value="{{ $cartItem->quantity }}"
                                                    class="form-control">
                                            </td>
                                            <td>
                                                <input type="hidden" name="product_id"
                                                    value="{{ $cartItem->product_id }}">

                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>

                                            </td>
                                        </form>

                                        <td>
                                            <form action="{{ route('cart.remove', $cartItem->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Remove</button>
                                            </form>
                                        </td>
                                    </tr>

                                    @php
                                        $totalPrice += $cartItem->quantity * $cartItem->product->price;
                                    @endphp
                                @endforeach
                                <tr>
                                    <td colspan="5"><strong>Total:</strong></td>
                                    <td><strong>{{ $totalPrice }}$</strong></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endif
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
</body>

</html>

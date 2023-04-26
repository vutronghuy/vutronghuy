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
                <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
            </tr>
            <tr>
                <td colspan="5" class="text-right">
                    <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                    <button class="btn btn-success"><i class="fa fa-money"></i> Checkout</button>
                </td>
            </tr>
        </tfoot>
    </table>
@endsection

@section('scripts')
    <script type="text/javascript">

        $(".cart_update").change(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update_cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                window.location.reload();
                }
            });
        });

        $(".cart_remove").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Do you really want to remove?")) {
                $.ajax({
                    url: '{{ route('remove_from_cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>
@endsection

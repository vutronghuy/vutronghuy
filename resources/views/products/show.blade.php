@extends('products.detail')


@section('content')
    <form action="{{ route('add') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <img src="/images/{{ $product->image }}" width="100%">
            </div>
            <div class="col-md-6">
                <div class="name">
                    <div class="form-group">
                        {{ $product->name }}
                    </div>
                </div>
                <div class="Des">
                    <div class="form-group">
                        {{ $product->description }}
                    </div>
                </div>
                <div class="price">
                    <div class="form-group">
                        <strong>Price:</strong>
                        {{ $product->price }}
                    </div>
                </div>
                <div class="Quan">
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group" >
                            <label for="quantity">Quantity:</label>
                        </div>
                    </form>
                </div>


                <div class="btn">
                    <input type="number" id="quantity" name="quantity" value="1" min="1" max="9"/>
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="submit">Add to cart</button>
                </div>
            </div>


        </div>

    </form>
    {{-- contact section --}}
<section class="contact">
    <div class="contact-info">
        <div class="second">
            <img src="{{ asset('image/logo.png')}}" alt="">
        </div>
        <div class="second">
            <img src="{{ asset('image/lo.png')}}" alt="">
        </div>
        <div class="first-info">
            <img src="{{ asset('image/logo.png')}}" alt="">

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

@endsection

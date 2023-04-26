@extends('products.detail')


@section('content')
    <div class="navbar">
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
                <li><a href="/cart">Cart</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        <div class="nav-icon">
            <a href="/"><i class='bx bx-search'></i></a>
            <a href="/cart"><i class='bx bx-cart'></i></a>

        </div>
    </div>
    {{-- <div class="row">
        <a href="{{url('/menu')}}" class="btn btn-primary">Back</a>
    </div> --}}
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <img src="/images/{{ $product->image }}" width="100%">
            </div>
            <div class="col-md-6">
                <div class="name">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $product->name }}
                    </div>
                </div>

                <div class="price">
                    <div class="form-group">
                        <strong>Price:</strong>
                        {{ $product->price }}
                    </div>
                </div>

                <div class="Des">
                    <div class="form-group2">
                        <strong>Description:</strong>
                        {{ $product->description }}
                    </div>
                </div>

                <div class="btnn">
                    <button type="submit">Add to cart</button>
                </div>
            </div>
        </div>

    </form>
@endsection

@extends('products.app')

@section('content')
<h1>Search Results for "{{ $query }}"</h1>

{{-- <div class="row">
    @foreach ($products as $product)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="{{ $product->image }}" alt="{{ $product->name }}">
                <div class="card-body">
                    <p class="card-text">{{ $product->name }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ url('/show') }}" class="btn btn-sm btn-outline-secondary">View</a>
                        </div>
                        <small class="text-muted">${{ $product->price }}</small>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div> --}}

<div class="row" style="border: none;">
    @foreach ($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card" style="border: none; box-shadow: 0 0 15px 0 rgba(0,0,0,0.2);">
                <div class="image">
                    <img class="card-img-top" src="/images/{{ $product->image }}" width="200px">

                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting1">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-category">Product ID: {{ $product->category_id }}</p>
                    <h6 class="card-price">Price: ${{ $product->price }}</h6>
                    <div class="menu-footer">
                        <a href="{{ route('show', $product->id) }}" class="btn ">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="d-flex justify-content-center">
    {{-- {{ $products->links() }} --}}
</div>
@endsection

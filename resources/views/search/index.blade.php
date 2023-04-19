@extends('products.app')

@section('content')
    <div class="container">
        <h1>Search Results</h1>
        <hr>
        @if($products->count() > 0)
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="{{ $product->image }}" alt="{{ $product->name }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                                        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-sm btn-outline-secondary">Add to Cart</a>
                                    </div>
                                    <small class="text-muted">{{ $product->price }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-warning" role="alert">
                No products found.
            </div>
        @endif
    </div>
@endsection

@extends('products.app')

@section('content')
    <div class="row">
        <a href="{{url('/menu')}}" class="btn btn-primary">Back</a>
    </div>
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{$product->name}}
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    {{$product->price}}
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{$product->description}}
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <img src="/images/{{$product->image}}" width="250px">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <form method="POST" action="">
                    @csrf
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1" max="{{ $product->quantity }}">
                    </div>
                    <button type="submit" class="btn btn-primary"><a href="{{ route('cart', $product->id) }}">Add to Cart</a></button>
                </form>
            </div>
        </div>
    </form>
@endsection

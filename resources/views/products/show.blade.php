@extends('products.app')

@section('content')
    <div class="row">
        <a href="{{url('/admin')}}" class="btn btn-primary">Back</a>
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
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
@endsection

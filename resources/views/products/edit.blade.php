@extends('products.app')

@section('content')
    <div class="row">
        <a href="{{url('/admin')}}" class="btn btn-primary">Back</a>
    </div>
    <form action="{{route('update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="text" name="price" value="{{$product->price}}" class="form-control" placeholder="Price">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="description" value="{{$product->description}}" class="form-control" placeholder="Description">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Category:</strong>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="Images">
                    <img src="/images/{{$product->image}}" width="250px">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
@endsection

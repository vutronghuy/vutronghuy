@extends('products.app')

@section('content')
    <div class="row1">
        <a href="{{url('/admin')}}" class="btn btn-primary">Back</a>
    </div>
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row2">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="text" name="price" class="form-control" placeholder="Price">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <input type="text" name="description" class="form-control" placeholder="Description">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
@endsection

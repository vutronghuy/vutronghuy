@extends('products.app')

@section('content')
    <div class="row1">
        <a href="{{url('/admin')}}" class="btn btn-primary">Back</a>
    </div>
    <form action="{{route('store_category')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row2">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-md-12 col-sm-12">
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
@endsection

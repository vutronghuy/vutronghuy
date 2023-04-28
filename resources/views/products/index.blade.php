@extends('products.app')
<link rel="stylesheet" href="css/index.css">
@section('content')
    <div class="container">
        <div class="card-body">
            <a href="{{ route('product.create') }}" class="btn btn-info btn-sm">
                Create new product
            </a>

            <a href="{{ url('/create_category') }}" class="btn btn-info btn-sm">
                Create new category
            </a>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td><img class="image" src="/images/{{$product->image}}" alt=""></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->category_id}}</td>
                                <td>
                                    <form action="{{route('destroy',$product->id)}}" method="POST">
                                        <button class="show-btn"><a href="{{route('show',$product->id)}}" class="btn btn-info">Show</a></button>
                                        <button class="edit-btn"><a href="{{route('edit',$product->id)}}" class="btn btn-info">Edit</a></button>
                                        {{@method_field('DELETE')}}
                                        {{@csrf_field()}}
                                        <button type="submit" class="delete-btn">Delete</button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
       {{ $products->links()}} 
    </div>
@endsection

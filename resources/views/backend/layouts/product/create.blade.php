@extends('backend.master')

@section('content')

    <form action="{{route('product.create')}}" method="post">
        <div class="col-md-6">
            @csrf
            <div class="form-group">
                <label for="name">Enter Product Name:</label>
                <input id="name" type="text" name="product_name" placeholder="Enter Product Name" class="form-control">
            </div>

            <div class="form-group">
                <label for="price">Enter Product Price:</label>
                <input id="price" type="number" name="product_price" placeholder="Enter Product price"
                       class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Create</button>

        </div>


    </form>


@endsection

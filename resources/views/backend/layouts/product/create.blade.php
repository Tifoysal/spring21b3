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



            <div class="form-group">
                <label for="category_id">Select Category:</label>
                <select class="form-control" name="category_id" id="category_id">
                    @foreach($categories as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Create</button>

        </div>


    </form>


@endsection

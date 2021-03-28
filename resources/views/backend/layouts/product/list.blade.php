@extends('backend.master')

@section('content')

    <a class="btn btn-success" href="{{route('product.create')}}">Create New Product</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $key=>$data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->category_id}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection

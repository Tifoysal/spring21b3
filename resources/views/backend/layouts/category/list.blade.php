@extends('backend.master')

@section('content')

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add Category
    </button>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($category_list as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td>
                <a class="btn btn-success" href="">View</a>
                <a class="btn btn-danger" href="">Delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create new category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{route('category.create')}}" method="post">
                    @csrf
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="name" class="form-label">Category Name (*):</label>
                            <input name="name" type="text" class="form-control" id="name" required
                                   placeholder="Enter Category Name">

                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Category Description :</label>
                            <textarea class="form-control" name="description" id="description"
                                      placeholder="Enter description."></textarea>

                        </div>

                        <div class="mb-3">
                            <label for="file" class="form-label">Category Image :</label>
                            <input type="file" class="">

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

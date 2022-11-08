@extends('backend.master')


@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-2">
        <a href="{{route('model.create')}}"><div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-plus fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Add model</p>          
                    </div>
            </div></a>
        </div>
    </div>
</div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h3 class="mb-4">Models List</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Model Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($model_list as $data)
                            <tr>
                                <th scope="row">{{$data->id}}</th>
                                <td>{{$data->model_name}}</td>
                                <td>{{$data->description}}</td>
                                <td>{{$data->status}}</td>
                                <td>
                                    <a href="" class="btn btn-outline-info">View</a>
                                    <a href="" class="btn btn-outline-success">Update</a>
                                    <a href="" class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$model_list->links()}}
                </div>
            </div>
        </div>
</div>

@endsection
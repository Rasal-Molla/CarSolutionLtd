@extends('backend.master')


@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-2">
        <a href="{{route('brand.create')}}"><div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-plus fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Create Brand</p>          
                    </div>
            </div></a>
        </div>
    </div>
</div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h3 class="mb-4">Brands List</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Brand image</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($brand_list as $list)
                            <tr>
                                <th scope="row">{{$list->id}}</th>
                                <td>
                                    <img width="50px" src="{{url('/uploads/'.$list->image)}}" alt="Brand_image">
                                </td>
                                <td>{{$list->brand_name}}</td>
                                <td>{{$list->status}}</td>
                                <td>
                                    <a href="" class="btn btn-outline-info">View</a>
                                    <a href="" class="btn btn-outline-success">Update</a>
                                    <a href="" class="btn btn-outline-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$brand_list->links()}}
                </div>
            </div>
        </div>
</div>

@endsection
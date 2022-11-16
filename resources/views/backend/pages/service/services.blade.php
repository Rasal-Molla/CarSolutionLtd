@extends('backend.master')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-2">
        <a href="{{route('service.create')}}"><div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-plus fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Create New Service</p>
                                
                    </div>
            </div></a>
        </div>
    </div>
</div>

<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h3 class="mb-4">Service List</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Service Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($service_list as $list)
                                    <tr>
                                        <th scope="row">{{$list->id}}</th>
                                        <td>
                                            <img width="120px" src="{{url('/uploads/'.$list->image)}}" alt="Service Image">
                                        </td>
                                        <td>{{$list->service_name}}</td>
                                        <td>{{$list->price}}</td>
                                        <td>{{$list->status}}</td>
                                        <td>
                                            <a class="btn btn-success" href="">Update</a>
                                            <a class="btn btn-danger" href="">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

@endsection
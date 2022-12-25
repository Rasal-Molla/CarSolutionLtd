@extends('backend.master')

@section('content')

{{-- <div class="container-fluid pt-4 px-4">
    <div class="row g-2">
        <a href="{{route('category.create')}}"><div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-plus fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Create Category</p>
                    </div>
            </div></a>
        </div>
    </div>
</div> --}}

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h3 class="mb-4">Category List</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Service Center</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @if(session()->has('message'))
                            <p class="alert alert-success">{{session()->get('message')}}</p>
                        @endif

                        @if(session()->has('error'))
                            <p class="alert alert-success">{{session()->get('error')}}</p>
                        @endif
                        @if(session()->has('update'))
                            <p class="alert alert-success">{{session()->get('update')}}</p>
                        @endif

                            @foreach($list as $key=>$data)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>
                                    <img width="50px" src="{{url('/uploads/'.$data->image)}}" alt="Category Image">
                                </td>
                                <td>{{$data->user->name}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->status}}</td>
                                <td>
                                    <a class="btn btn-info" href="{{route('category.view', $data->id)}}">View</a>
                                    <a class="btn btn-success" href="{{route('category.edit', $data->id)}}">Update</a>
                                    {{-- <a class="btn btn-danger" href="{{route('category.delete',$data->id)}}">Delete</a> --}}
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

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
                        @if(session()->has('message'))
                            <p class="alert alert-success">{{session()->get('message')}}</p>
                        @endif
                        @if(session()->has('error'))
                            <p class="alert alert-danger">{{session()->get('error')}}</p>
                        @endif
                        @if(session()->has('update'))
                            <p class="alert alert-success">{{session()->get('update')}}</p>
                        @endif
                        @foreach($brand_list as $key=>$list)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>
                                    <img width="50px" src="{{url('/uploads/'.$list->image)}}" alt="Brand_image">
                                </td>
                                <td>{{$list->brand_name}}</td>
                                <td>{{$list->status}}</td>
                                <td>
                                    <a href="{{route('brand.view', $list->id)}}" class="btn btn-info">View</a>
                                    <a href="{{route('brand.edit', $list->id)}}" class="btn btn-success">Update</a>
                                    <a href="{{route('brand.delete', $list->id)}}" class="btn btn-danger">Delete</a>
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

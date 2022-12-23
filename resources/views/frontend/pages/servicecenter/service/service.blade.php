@extends('frontend.master')


@section('content')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-1">

        </div>
        <div class="col-10">
            <div class="mb-3">
            <h2 class="fs-5">Service Table</h2>
            </div>
            <a href="{{route('scservice.form')}}" class="btn btn-success">Add service</a>
        <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Service Name</th>
                    <th scope="col">Brand Name</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($serviceList as $key=>$list)
                    <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>
                        <img width="65px" src="{{url('/uploads/'.$list->image)}}" alt="Image">
                    </td>
                    <td>{{$list->service_name}}</td>
                    <td>{{$list->brand->brand_name}}</td>
                    <td>{{$list->category->name}}</td>
                    <td>{{$list->price}}</td>
                    <td>{{$list->status}}</td>
                    <td>
                        <a href="{{route('scservice.updateform', $list->id)}}" class="btn btn-success">Update</a>
                        {{-- <a href="{{route('scservice.delete', $list->id)}}" class="btn btn-danger">Delete</a> --}}
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-1">
        </div>
    </div>
</div>

@endsection

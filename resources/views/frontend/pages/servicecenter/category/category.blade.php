@extends('frontend.master')


@section('content')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-1">

        </div>
        <div class="col-10">
            <div class="mb-3">
            <h2 class="fs-5">Category Table</h2>
            </div>
            <a href="{{route('sccategory.create')}}" class="btn btn-success">Add Category</a>
        <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorylist as $key=>$data )
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>
                                <img width="70px" src="{{url('/uploads/'.$data->image)}}" alt="Image">
                            </td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->brand->brand_name}}</td>
                            <td>{{$data->status}}</td>
                            <td>
                                <a href="{{route('sccategory.update', $data->id)}}" class="btn btn-success">Update</a>
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

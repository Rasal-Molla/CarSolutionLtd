@extends('frontend.master')


@section('content')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-1">

        </div>
        <div class="col-10">
            <div class="mb-3">
            <h2 class="fs-5">Request Table</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Service</th>
                    <th scope="col">Special Request</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookingInfo as $key=>$data)
                    <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$data->Customer_name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->brand->brand_name}}</td>
                    <td>{{$data->model}}</td>
                    <td>{{$data->service->service_name}}</td>
                    <td>{{$data->special_request}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->status}}</td>
                    <td>
                        <a href="{{route('screquest.editForm', $data->id)}}" class="btn btn-success">Update</a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
        <div class="col-1">

        </div>
    </div>
</div>

@endsection

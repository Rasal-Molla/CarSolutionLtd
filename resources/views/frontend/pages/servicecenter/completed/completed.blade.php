@extends('frontend.master')


@section('content')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-1">

        </div>
        <div class="col-10">
            <div class="mb-3">
            <h2>Completed project</h2>
            </div>
        <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Service Center</th>
                    <th scope="col">Service</th>
                    <th scope="col">Price</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Transction</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($completeWorkList as $key=>$data)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$data->Customer_name}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->serviceCenter->name}}</td>
                        <td>{{$data->service->service_name}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->payment}}</td>
                        <td>{{$data->transaction_id}}</td>
                        <td>{{$data->status}}</td>
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

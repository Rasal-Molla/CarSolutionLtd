@extends('backend.master')


@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">All Service Center Booking Payment List</h6>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">ID</th>
                        <th scope="col">Service Center</th>
                        <th scope="col">Service</th>
                        <th scope="col">Price</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($paymentinfo as $key=>$data)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$data->serviceCenter->name}}</td>
                        <td>{{$data->service->service_name}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->amount}}</td>
                        <td>{{$data->status}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

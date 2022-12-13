@extends('frontend.master')


@section('content')
<div class="container-fluid">
    <div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="mt-3">
                    <h2 class="fs-5">Booking update Form</h2>
                </div>
            <div>
                <form action="{{route('customer.bookingUpdate', $booking->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="modal-body">
                    <div>
                        <label for="">Customer Name</label>
                        <input required value="{{auth()->user()->name}}" name="customer_name" type="text" class="form-control" placeholder="Enter customer name" readonly>
                    </div>
                    <div>
                        <label for="">Phone</label>
                        <input required value="{{auth()->user()->phone}}" name="phone" type="text" class="form-control" placeholder="Enter phone" readonly>
                    </div>
                    <label for="">Service Center</label>
                    <select name="service_center_id" class="form-control" id="">
                        @foreach($service_center as $data)
                        <option required value="{{$data->id}}" class="form-control">{{$data->name}}</option>
                        @endforeach
                    </select>
                    <label for="">Brand</label>
                    <select name="brand" class="form-control" id="">
                        @foreach($brand as $data)
                        <option required @if($booking->brand_id==$data->id) selected @endif value="{{$data->id}}" class="form-control">{{$data->brand_name}}</option>
                        @endforeach
                    </select>
                    <div>
                        <label for="">Model</label>
                        <input required value="{{$booking->model}}" name="model" type="text" class="form-control" placeholder="Enter model">
                    </div>
                    <label for="">Service</label>
                    <select name="service" class="form-control" id="">
                        @foreach($service as $data)
                        <option required @if($booking->service_id==$data->id) selected @endif value="{{$data->id}}" class="form-control">{{$data->service_name}}</option>
                        @endforeach
                    </select>
                    <div>
                        <label for="">Request</label>
                        <input required name="special_request" type="text" class="form-control" placeholder="Enter special request">
                    </div>
                    <button type="submit" class="btn btn-success mt-3" >Update</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
@endsection

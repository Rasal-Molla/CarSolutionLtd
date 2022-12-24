@extends('frontend.master')


@section('content')
<div class="container-fluid">
    <div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="mt-3">
                    <h2 class="fs-5">Booking Response Form</h2>
                </div>
            <div>
                <form action="{{route('screquest.update', $requestInfo->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                    <div class="modal-body">
                    <div>
                        <label for="">Customer Name</label>
                        <input required value="{{$requestInfo->Customer_name}}" name="customer_name" type="text" class="form-control" placeholder="Enter customer name" readonly>
                    </div>
                    <div>
                        <label for="">Phone</label>
                        <input required value="{{auth()->user()->phone}}" name="phone" type="text" class="form-control" placeholder="Enter phone" readonly>
                    </div>
                    <label for="">Service Center</label>
                    <select name="service_center" class="form-control" id="">
                        @foreach($service_center as $data)
                        <option required  value="{{$data->id}}" class="form-control">{{$data->name}}</option>
                        @endforeach
                    </select>
                    <label for="">Brand</label>
                    <select name="brand" class="form-control" id="">
                        @foreach($brand as $data)
                        <option required @if($requestInfo->brand_id==$data->id) selected @endif value="{{$data->id}}" class="form-control">{{$data->brand_name}}</option>
                        @endforeach
                    </select>
                    <div>
                        <label for="">Model</label>
                        <input required value="{{$requestInfo->model}}" name="model" type="text" class="form-control" placeholder="Enter model" readonly>
                    </div>
                    <label for="">Service</label>
                    <select name="service" class="form-control" id="">
                        @foreach($service as $data)
                        <option required @if($requestInfo->service_id==$data->id) selected @endif value="{{$data->id}}" class="form-control">{{$data->service_name}}</option>
                        @endforeach
                    </select>
                    <div>
                        <label for="">Address</label>
                        <input required value="{{$requestInfo->address}}" name="address" type="text" class="form-control" readonly>
                    </div>
                    <div>
                        <label for="">Address-1</label>
                        <input required value="{{$requestInfo->address_1}}" name="address" type="text" class="form-control" placeholder="Pick up address" readonly>
                    </div>
                    <div>
                        <label for="">Price</label>
                        <input required value="{{$requestInfo->price}}" name="price" type="text" class="form-control" placeholder="Enter amount" readonly>
                    </div>
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="Progress">Progress</option>
                        <option value="Cancle">Cancle</option>
                        <option value="Released">Released</option>
                    </select>
                    <button type="submit" class="btn btn-success mt-3" >Response</button>
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

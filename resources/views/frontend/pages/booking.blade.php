@extends('frontend.master')


@section('content')

<style type="text/css">
    .order-form .container {
        color: #4c4c4c;
        padding: 20px;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1);
    }

    .order-form-label {
        margin: 8px 0 0 0;
        font-size: 14px;
        font-weight: bold;
    }

    .order-form-input {
        width: 100%;
        padding: 8px 8px;
        border-width: 1px !important;
        border-style: solid !important;
        border-radius: 3px !important;
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        font-weight: normal;
        font-style: normal;
        line-height: 1.2em;
        background-color: transparent;
        border-color: #cccccc;
    }

    .btn-submit:hover {
        background-color: #090909 !important;
    }
</style>

<section class="order-form my-4 mx-4">
    <div class="container pt-4">

        <div class="row">
            <div class="col-12">
                <div class="text-center fs-5 mb-3">
                    <h1>Your Booking Form</h1>
                    <hr class="mt-1">
                </div>

            </div>
            <div class="col-12">

                <form action="{{route('payNow')}}" method="post">

                    @csrf

                    <div class="row mx-4">
                        <div class="col-12 col-sm-6">
                            <label for="">Service Name</label>
                            <select name="service_id" id="" class="form-control">
                                <option value="{{$serviceData->id}}">{{$serviceData->service_name}}</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 mt-2 mt-sm-0">
                            <label for="">Service Center Name</label>
                            <select name="service_center_id" id="" class="form-control">
                                <option value="{{$serviceData->user->id}}">{{$serviceData->user->name}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mx-4">
                        <div class="col-12 col-sm-6">
                            <label for="">Customer Name</label>
                            <input class="form-control" name="Customer_name" value="{{auth()->user()->name}}" readonly>
                        </div>
                        <div class="col-12 col-sm-6 mt-2 mt-sm-0">
                            <label for="">Phone</label>
                            <input class="form-control" name="phone" value="{{auth()->user()->phone}}" readonly>
                        </div>
                    </div>
                    <div class="row mx-4">
                        <div class="col-12 col-sm-6">
                            <label for="">Brand Name</label>
                            <select name="brand_id" class="form-control" id="">
                                @foreach ($brandList as $data)
                                <option value="{{$data->id}}">{{$data->brand_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 mt-2 mt-sm-0">
                            <label for="">Model</label>
                            <input class="form-control" name="model" value="">
                        </div>
                    </div>
                    <div class="row mx-4">
                        <div class="col-12 col-sm-6">
                            <label for="">Address 1</label>
                            <input type="text" class="form-control" value="{{auth()->user()->address}}" name="address"
                                placeholder="Enter your address" readonly>
                        </div>
                        <div class="col-12 col-sm-6 mt-2 mt-sm-0">
                            <label for="">Address 2 (Optional)</label>
                            <input class="form-control" name="address_1" placeholder="Enter pick-up address ">
                        </div>
                    </div>
                    <div class="row mx-4">
                        <div class="col-12 col-sm-6 mt-2 mt-sm-0">
                            <label for="">Price</label>
                            <input class="form-control" name="price" value="{{$serviceData->price}}" readonly>
                        </div>
                        <div class="col-12 col-sm-6 mt-2 mt-sm-0">
                            <label for="">Advance Payment</label>
                            <input class="form-control" name="advance_payment"  type="number">
                        </div>
                       <!-- <div class="col-12 col-sm-6">
                            <label for="">Special Request</label>
                            <input class="form-control" name="special_request">
                        </div> -->
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <button type="submit" id="btnSubmit"
                                class="btn btn-dark d-block mx-auto btn-submit">Submit</button>
                        </div>
                    </div>

            </div>
            </form>
        </div>
    </div>
</section>

@endsection

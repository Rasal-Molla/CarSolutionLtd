@extends('frontend.master')


@section('content')

<style type="text/css">

body {
    font-family: 'Roboto Condensed', sans-serif;
    background-color: #f5f5f5
}

.hedding {
    font-size: 20px;
    color: #ab8181`;
}

.left-side-product-box img {
    width: 100%;
}

.left-side-product-box .sub-img img {
    margin-top: 5px;
    width: 83px;
    height: 100px;
}

.right-side-pro-detail span {
    font-size: 15px;
}

.right-side-pro-detail p {
    font-size: 25px;
    color: #a1a1a1;
}

.right-side-pro-detail .price-pro {
    color: #E45641;
}

.right-side-pro-detail .tag-section {
    font-size: 18px;
    color: #5D4C46;
}

.pro-box-section .pro-box img {
    width: 100%;
    height: 200px;
}

@media (min-width:360px) and (max-width:640px) {
    .pro-box-section .pro-box img {
        height: auto;
    }
}

</style>

<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
            <div class="col-lg-8 border p-3 mt-4 bg-white">
                <div class="row hedding m-0  pt-0 pb-3">
                    Service Details
                </div>
                <div class="row m-0">
                    <div class="col-lg-4 left-side-product-box pb-3">
                        <img style="width: 100%; height:100%;" src="{{url('/uploads/'.$serviceInfo->image)}}" >
                    </div>
                    <div class="col-lg-8">
                        <div class="right-side-pro-detail border p-3 m-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="m-0 p-0">Service Center: {{$serviceInfo->user->name}}</h1>
                                    <span>Service Name: {{$serviceInfo->service_name}}</span> <br>
                                    <span>Brand Name: {{$serviceInfo->brand->brand_name}}</span> <br>
                                    <span>Category Name: {{$serviceInfo->category->name}}</span>
                                </div>
                                <div class="col-lg-12">
                                    <p class="m-0 p-0 price-pro">Price: {{$serviceInfo->price}} BDT</p>
                                    <hr class="p-0 m-0">
                                </div>
                                <div class="col-lg-12 pt-2">
                                    <h5>Service Detail:</h5>
                                    <span>
                                        {{$serviceInfo->description}}
                                    </span>
                                    <hr>
                                </div>
                                <div class="col-lg-12 mt-3">
                                    <div class="row">
                                        <div class="col-lg-4 pb-2">

                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <div class="row">
                                                <div class="col-md-6"><a href="{{route('Home.serviceCenter.servicewise.bookingView', $serviceInfo->id)}}" class="btn btn-success">Book</a></div>
                                                <div class="col-md-6"><a href="{{route('Home.service')}}" class="btn btn-success">Back</a></div>
                                            </div>
                                            </div>
                                        <div class="col-lg-4 pb-2">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-lg-2"></div>
    </div>
</div>

@endsection

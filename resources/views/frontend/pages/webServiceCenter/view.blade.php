@extends('frontend.master')


@section('content')


<link rel="stylesheet" href="https://allyoucan.cloud/cdn/icofont/1.0.1/icofont.css" integrity="sha384-jbCTJB16Q17718YM9U22iJkhuGbS0Gd2LjaWb4YJEZToOPmnKDjySVa323U+W7Fv" crossorigin="anonymous">

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="osahan-account-page-left shadow-sm bg-white h-100">
                <div class="border-bottom p-4">
                    <div class="osahan-user text-center">
                        <div class="osahan-user-media">
                            <img class="mb-3 rounded-pill shadow-sm mt-1" src="{{url('/uploads/'.$serviceCenter->image)}}" alt="Service Center Image">
                            <div class="osahan-user-media-body">
                                <h6 class="mb-2">Name: {{$serviceCenter->name}}</h6>
                                <p class="mb-1">Email: {{$serviceCenter->email}}</p>
                                <p>Phone: {{$serviceCenter->phone}}</p>
                                <p>Address: {{$serviceCenter->address}}</p>
                             </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs flex-column border-0 pt-4 pl-4 pb-4" id="myTab" role="tablist">

                </ul>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mt-3">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total Service</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{route('servicecenter.totalservice',$serviceCenter->id)}}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mt-3">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Category</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{route('servicecenter.totalcategory',$serviceCenter->id)}}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mt-3">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">Total Brand</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{route('servicecenter.totalbrand', $serviceCenter->id)}}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

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
        <div class="col-md-9">
            <div class="osahan-account-page-right shadow-sm bg-white p-4 h-100">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade  active show" id="favourites" role="tabpanel" aria-labelledby="favourites-tab">
                        <h4 class="font-weight-bold mt-0 mb-4">Our Service</h4>
                        <div class="row">
                            @foreach($serviceList as $list)
                            <div class="col-md-4 col-sm-6 mb-4 pb-2">
                                <div class="list-card bg-white h-100 rounded overflow-hidden position-relative shadow-sm">
                                    <div class="list-card-image">
                                        <div class="favourite-heart text-danger position-absolute"><a href="#"><i class="icofont-heart"></i></a></div>
                                        <a href="#">
                                            <img style="width: 230px;" src="{{url('/uploads/'.$list->image)}}" class="img-fluid item-img">
                                        </a>
                                    </div>
                                    <div class="p-3 position-relative">
                                        <div class="list-card-body">
                                            <h6 class="mb-1">Name: {{$list->service_name}}</h6>
                                            <p class="text-gray">Price: {{$list->price}}</p>
                                            <p class="text-gray mb-3">Status: {{$list->status}}</p>
                                        </div>
                                        <div class="list-card-badge">
                                            <a href="{{route('Home.serviceCenter.servicewise.bookingView',$list->id)}}" class="btn btn-success">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
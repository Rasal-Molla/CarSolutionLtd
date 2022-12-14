@extends('frontend.master')


@section('content')


<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="text-primary text-uppercase">Our Service</h2>
            </div>
            <div class="row g-4 mt-4">
                @foreach($serviceList as $data)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="{{url('/uploads/'.$data->image)}}" alt="Image">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">{{$data->service_name}}</h5>
                            <span>{{$data->price}} BDT</span> <br>
                            <a href="{{route('Home.serviceDetails', $data->id)}}" class="btn btn-success">Details</a>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

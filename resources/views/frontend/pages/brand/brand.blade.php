@extends('frontend.master')


@section('content')

<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our All Brand //</h6>
                <h1 class="mb-5">Our Brands</h1>
            </div>
            <div class="row g-4">
                @foreach($brandList as $data)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img style="width: 320px; height:270px;" class="img-fluid" src="{{url('/uploads/'.$data->image)}}" alt="Image">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">{{$data->brand_name}}</h5>
                            <span>Status: {{$data->status}}</span> <br>
                            <a href="{{route('Home.brandDetails', $data->id)}}" class="btn btn-success mt-3">Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

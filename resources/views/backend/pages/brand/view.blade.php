@extends('backend.master')


@section('content')

<div class="container-fluid col-sm-12 col-xl-12 mt-3">
    <div class="bg-secondary rounded h-100 p-4">
        <h1 class="mb-4 text-center">Brand Details</h1>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item text-center">
                <img class="img-fluid rounded-circle mx-auto mb-4" src="{{url('/uploads/', $brand_view->image)}}" style="width: 100px; height: 100px;">
                <h3 class="mb-1">Brand Name: {{$brand_view->brand_name}}</h3>
                <h3 class="mb-1 text-white"><span class="text-white">Brand Status:</span> {{$brand_view->status}}</h3>
                <p class="mb-0"><span class="text-white">Description:</span> {{$brand_view->description}}</p>
                <a class="btn btn-success mt-3" href="{{route('brand')}}">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection
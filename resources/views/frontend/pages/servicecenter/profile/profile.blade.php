@extends('frontend.master')


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
        </div>
        <div class="col-md-4">
            <div class="img-container">
                <p class="fs-5 mt-5">Profile</p>
                <img class="w-25 h-auto" src="https://cdn.pixabay.com/photo/2015/03/04/22/35/avatar-659651__340.png" alt="">
            </div>
            <div>
                <p>Service Center: {{auth()->user()->name}}</p>
                <p>Name: Minhaz</p>
                <p>Email: {{auth()->user()->email}}</p>
                <p>Phone: {{auth()->user()->phone}}</p>
                <p>Address: {{auth()->user()->address}}</p>
            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</div>
    


@endsection
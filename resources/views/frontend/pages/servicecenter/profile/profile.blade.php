@extends('frontend.master')


@section('content')

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-3">
            <div class="img-container">
                <p class="fs-5 mt-5">Profile</p>
                <img class="w-25 h-auto" src="https://cdn.pixabay.com/photo/2015/03/04/22/35/avatar-659651__340.png" alt="">
            </div>
            <div>
                <p>Name: Minhaz</p>
                <p>Service Center: {{auth()->user()->name}}</p>
                <p>Email: {{auth()->user()->email}}</p>
                <p>Phone: {{auth()->user()->phone}}</p>
                <p>Address: {{auth()->user()->address}}</p>
            </div>
        </div>
        <div class="col-md-3">
            <form action="{{route('scprofile.edit')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div>
                        <label for="">Name</label>
                        <input required name="name" value="{{auth()->user()->name}}" type="text" class="form-control" required placeholder="Enter name">
                    </div>
                    <div>
                        <label for="">Service Center</label>
                        <input required name="service_center" value="{{auth()->user()->name}}" type="text" class="form-control" required placeholder="Enter service center">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input required name="email" value="{{auth()->user()->email}}" type="email" class="form-control" required placeholder="Enter email">
                    </div>
                    <div>
                        <label for="">Phone</label>
                        <input required name="phone" value="{{auth()->user()->phone}}" type="text" class="form-control" required placeholder="Enter number">
                    </div>
                    <div>
                        <label for="">Address</label>
                        <input required name="address" value="{{auth()->user()->address}}" type="text" class="form-control" required placeholder="Enter address">
                    </div>
                        <button type="submit" class=" btn btn-success mt-3" >EDIT</button>
                    </div>
                </form>
                </div>
            <div class="col-md-3">
        </div>
    </div>
</div>
    


@endsection
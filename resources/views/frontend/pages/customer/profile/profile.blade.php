@extends('frontend.master')


@section('content')

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-3">
            <div class="img-container">
                <p class="fs-5 mt-5">Customer Profile</p>
                <img class="w-25 h-auto" src="https://cdn.pixabay.com/photo/2015/03/04/22/35/avatar-659651__340.png" alt="">
            </div>
            <div>
                <p>Name: {{auth()->user()->name}}</p>
                <p>Email: {{auth()->user()->email}}</p>
                <p>Phone: {{auth()->user()->phone}}</p>
                <p>Address: {{auth()->user()->address}}</p>
            </div>
        </div>
        <div class="col-md-3">
            <form action="{{route('customer.profileUpdate')}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                    <div>
                        <label for="">Name</label>
                        <input required value="{{auth()->user()->name}}" name="name" type="text" class="form-control" required placeholder="Enter name">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input required value="{{auth()->user()->email}}" name="email" type="email" class="form-control" required placeholder="Enter email">
                    </div>
                    <div>
                        <label for="">Phone</label>
                        <input required value="{{auth()->user()->phone}}" name="phone" type="text" class="form-control" required placeholder="Enter number">
                    </div>
                    <div>
                        <label for="">Address</label>
                        <input required value="{{auth()->user()->address}}" name="address" type="text" class="form-control" required placeholder="Enter address">
                    </div>
                        <button type="submit" class=" btn btn-success mt-3" >Update</button>
                    </div>
                </form>
                </div>
            <div class="col-md-3">
        </div>
    </div>
</div>



@endsection

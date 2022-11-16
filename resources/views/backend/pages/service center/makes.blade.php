@extends('backend.master')


@section('content')


<div class="container-fluid col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4 m-3 ">
        <h3 class="mb-4">Service Center Form</h3>
            <form action="{{route('servicecenter.form')}}" method="POST">
                @if($errors->any())
                    @foreach($errors->all() as $message)
                        <p class="alert alert-danger">{{$message}}</p>
                    @endforeach
                @endif

                @if(session()->has('message'))
                    <p class="alert alert-success">{{session()->get('message')}}</p>
                @endif

                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Service Center Name:</label>
                    <input required type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter service center name" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address:</label>
                    <input required type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input required type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location:</label>
                    <input required type="text" class="form-control" id="location" placeholder="Enter your location" name="location">
                </div>
                <div class="mb-4">
                    <label for="service_type" class="form-label">Service Type:</label>
                    <input required type="text" class="form-control" id="service_type" placeholder="Enter service type" name="service_type">
                </div>
                <select name="service_hour" class="form-select mb-3" aria-label="Default select example">
                    <option selected>Select service hour</option>
                    <option value="24 hour">24 Hour</option>
                    <option value="12 hour">12 Hour</option>                
                </select>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</div>

@endsection
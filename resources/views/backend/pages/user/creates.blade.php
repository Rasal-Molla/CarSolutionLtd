@extends('backend.master')


@section('content')

<div class="container-fluid col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4 m-3 ">
        <h3 class="mb-4">User Form</h3>
            <form action="{{route('user.form')}}" method="POST">

                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input required type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter user name" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address:</label>
                    <input required type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input required type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
                </div>
                <div class="mb-4">
                    <label for="address" class="form-label">Address:</label>
                    <input required type="text" class="form-control" id="address" placeholder="Enter address" name="address">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password:</label>
                    <input required type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                </div>
                <select name="gender" class="form-select mb-3" aria-label="Default select example">
                    <option selected>Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Fmale">Female</option>                
                </select>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</div>

@endsection
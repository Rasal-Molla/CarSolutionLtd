@extends('backend.master')


@section('content')
<div class="container bg-white">
    <h2 class="text-dark">New user create form</h2>
    <form action="{{route('user.form')}}" method="POST">
        @csrf
    <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
        </div>
        <div class="mb-3 mt-3">
            <label for="address" class="form-label">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
        </div>
        <div class="mb-3 mt-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="select" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
        </div>
        <div class="mb-3 mt-3">
            <label for="birth_date" class="form-label">Birth Date:</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date">
        </div>
        <div>
        <label for="gender" class="form-label">Gender:</label>
                <select class="form-select" id="gender" name="gender" placeholder="Enter address">
                    <option>Male</option>
                    <option>Female</option>
             </select>
        </div>
        <br>
        <div class="form-check mb-3">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-outline-success mt-3 mb-3">Submit</button>
    </form>
</div>
@endsection
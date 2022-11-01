@extends('backend.master')


@section('content')

<div class="container bg-white mt-3">
    <h2 class="text-dark">New category create form</h2>
    <form action="{{route('category.form')}}" method="POST">
        @csrf
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="mb-3 mt-3">
            <label for="model" class="form-label">Model:</label>
            <input type="text" class="form-control" id="model" placeholder="Enter vehicle model" name="model">
        </div>
        <div class="mb-3">
            <label for="wheel_type" class="form-label">Wheel Type:</label>
            <input type="text" class="form-control" id="wheel_type" placeholder="Enter wheel type" name="wheel_type">
        </div>
        <div class="mb-3 mt-3">
            <label for="engiens_type" class="form-label">Engine Type:</label>
            <input type="text" class="form-control" id="engines_type" placeholder="Enter engine" name="engines_type">
        </div>
        <br>
        <div class="form-check mb-3">
            <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-outline-danger mt-3 mb-3">Submit</button>
    </form>
</div>

@endsection
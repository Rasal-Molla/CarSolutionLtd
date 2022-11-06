@extends('backend.master')


@section('content')

<div class="container-fluid col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4 m-3 ">
        <h3 class="mb-4">Create Category</h3>
            <form action="{{route('category.form')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name:</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter category name" name="name">
                </div>
                <div class="mb-3">
                    <label for="brand_name" class="form-label">Brand Name:</label>
                    <input type="text" class="form-control" id="brand_name" aria-describedby="emailHelp" placeholder="Enter brand name" name="brand_name">
                </div>
                <div class="mb-3">
                    <label for="model_name" class="form-label">Model Name:</label>
                    <input type="text" class="form-control" id="model_name" placeholder="Enter model name" name="model_name">
                </div>
                <div class="mb-3">
                    <label for="wheel" class="form-label">Wheel Type:</label>
                    <input type="text" class="form-control" id="wheel" placeholder="Enter wheel" name="wheel">
                </div>
                <div class="mb-4">
                    <label for="engine_type" class="form-label">Engine Type:</label>
                    <input type="text" class="form-control" id="engine_type" placeholder="Enter engine type" name="engine_type">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</div>
@endsection
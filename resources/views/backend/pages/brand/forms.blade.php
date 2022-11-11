@extends('backend.master')


@section('content')

<div class="container-fluid col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4 m-3 ">
        <h3 class="mb-4">Brand Form</h3>
            <form action="{{route('brand.form')}}" method="POST" enctype="multipart/form-data">

            @if($errors->any())
                @foreach($errors->all() as $message)
                <p class="alert alert-danger">{{$message}}</p>
                @endforeach
            @endif

            @if(session()->has('message'))
                <p class="alter alter-success">{{session()->get('message')}}</p>
            @endif

                @csrf
                <div class="mb-3">
                    <label for="brand_name" class="form-label">Brand Name:</label>
                    <input required type="text" class="form-control" id="brand_name" aria-describedby="emailHelp" placeholder="Enter brand name" name="brand_name">
                </div>
                <div class="mb-4">
                    <label for="description" class="form-label">Brand description:</label>
                    <input required type="text" class="form-control" id="description" aria-describedby="emailHelp" placeholder="Enter brand description" name="description">
                </div>
                <select name="status" class="form-select mb-3" aria-label="Default select example">
                    <option selected value="Active">Active</option>
                    <option value="Inactive">Inactive</option>                
                </select>
                <div class="mb-4">
                    <label for="image" class="form-label">Select Image:</label>
                    <input name="image" class="form-control bg-dark" type="file" id="image">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</div>

@endsection
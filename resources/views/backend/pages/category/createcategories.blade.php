@extends('backend.master')


@section('content')

<div class="container-fluid col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4 m-3 ">
        <h3 class="mb-4">Create Category</h3>
            <form action="{{route('category.form')}}" method="POST">
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
                    <label for="name" class="form-label">Category Name:</label>
                    <input required type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter category name" name="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input required type="text" class="form-control" id="brand_name" aria-describedby="emailHelp" placeholder="Enter description" name="description">
                </div>
                <label for="status" class="form-label">Status:</label>
                <select name="status" class="form-select mb-3" aria-label="Default select example">
                    <option selected value="Active">Active</option>
                    <option value="Inactive">Inactive</option>                
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
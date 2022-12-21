@extends('backend.master')


@section('content')

<div class="container-fluid col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4 m-3 ">
        <h3 class="mb-4">Update Category</h3>
            <form action="{{route('category.update',$category_data->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @if($errors->any())
                @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
                @endforeach
            @endif

                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name:</label>
                    <input required value="{{$category_data->name}}" required type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter category name" name="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input required value="{{$category_data->description}}" required type="text" class="form-control" id="brand_name" aria-describedby="emailHelp" placeholder="Enter description" name="description">
                </div>
                <label for="status" class="form-label">Status:</label>
                <select name="status" class="form-select mb-3" aria-label="Default select example">
                    <option @if($category_data->status=='Active') selected @endif value="Active">Active</option>
                    <option @if($category_data->status=='Inactive') selected @endif value="Inactive">Inactive</option>
                </select>
                <div class="mb-4">
                    <label for="image" class="form-label">Select Image:</label>
                    <input name="image" class="form-control bg-dark" type="file" id="image">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
    </div>
</div>
@endsection

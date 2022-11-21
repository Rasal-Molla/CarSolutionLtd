@extends('backend.master')


@section('content')

<div class="container-fluid col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4 m-3 ">
        <h3 class="mb-4">Service Form</h3>
            <form action="{{route('service.update',$service_list->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @if($errors->any())
                @foreach($errors->all() as $message)
                <p class="alert alert-danger">{{$message}}</p>
                @endforeach
            @endif

                @csrf

                <div class="mb-3">
                    <label for="service_name" class="form-label">Service Name:</label>
                    <input value="{{$service_list->service_name}}" required type="text" class="form-control" id="service_name" aria-describedby="emailHelp" placeholder="Enter service center name" name="service_name">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input value="{{$service_list->price}}" required type="number" class="form-control" id="price" aria-describedby="emailHelp" placeholder="Enter price" name="price">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input value="{{$service_list->description}}" required type="text" class="form-control" id="description" aria-describedby="emailHelp" placeholder="Enter description" name="description">
                </div>
                <select required name="status" class="form-select mb-3" aria-label="Default select example">
                    <option @if($service_list->status=='Active') selected @endif value="Active">Active</option>
                    <option @if($service_list->status=='Inactive') selected @endif value="Inactive">Inactive</option>                
                </select>
                <div class="mb-4">
                    <label for="image" class="form-label">Select Image:</label>
                    <input name="image" class="form-control bg-dark" type="file" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
    </div>
</div>

@endsection
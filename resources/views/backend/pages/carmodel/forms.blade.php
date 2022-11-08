@extends('backend.master')


@section('content')

<div class="container-fluid col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4 m-3 ">
        <h3 class="mb-4">Model Form</h3>
            <form action="{{route('model.form')}}" method="POST">

            @if($errors->any())
                @foreach($errors->all() as $message)
                <p class="alert alert-danger">{{$message}}</p>
                @endforeach
            @endif

                @csrf
                <div class="mb-3">
                    <label for="model_name" class="form-label">Model Name:</label>
                    <input required type="text" class="form-control" id="model_name" aria-describedby="emailHelp" placeholder="Enter model name" name="model_name">
                </div>
                <div class="mb-4">
                    <label for="description" class="form-label">Model description:</label>
                    <input type="text" class="form-control" id="description" aria-describedby="emailHelp" placeholder="Enter model description" name="description">
                </div>
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
@extends('backend.master')


@section('content')

<div class="container-fluid col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4 m-3 ">
        <h3 class="mb-4">Appointment Form</h3>
            <form action="{{route('appointment.form')}}" method="POST">
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
                    <label for="name" class="form-label">Name:</label>
                    <input required type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter user name" name="name">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone number:</label>
                    <input required type="text" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter your phone number" name="phone">
                </div>
                <label for="category" class="form-label">Category:</label>
                <select name="category_id" class="form-select mb-3" aria-label="Default select example">
                @foreach($list as $data)    
                    <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach                
                </select>
                <label for="brand" class="form-label">Brand:</label>
                <select name="brand_id" class="form-select mb-3" aria-label="Default select example">
                @foreach($brand_list as $brand)    
                    <option value="{{$brand->id}}">{{$brand->brand_name}}</option> 
                @endforeach               
                </select>
                <label for="car_model" class="form-label">Model:</label>
                <select name="car_model_id" class="form-select mb-3" aria-label="Default select example">
                @foreach($model_list as $model)
                    <option value="{{$model->id}}">{{$model->model_name}}</option> 
                @endforeach               
                </select>
                <label for="service" class="form-label">Service:</label>
                <select name="service_id" class="form-select mb-3" aria-label="Default select example">
                @foreach($service_list as $service)
                    <option value="{{$service->id}}">{{$service->service_name}}</option>
                @endforeach              
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
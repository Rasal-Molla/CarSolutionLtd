@extends('backend.master')


@section('content')

<div class="container-fluid col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4 m-3 ">
        <h3 class="mb-4">Service Form</h3>
            <form action="{{route('service.form')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="service_name" class="form-label">Service Name:</label>
                    <input type="text" class="form-control" id="service_name" aria-describedby="emailHelp" placeholder="Enter service center name" name="service_name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</div>

@endsection
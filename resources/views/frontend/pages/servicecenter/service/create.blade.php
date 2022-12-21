@extends('frontend.master')


@section('content')
<div class="container-fluid">
    <div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="mt-3">
                    <h2 class="fs-5">Service Form</h2>
                </div>
            <div>
                <form action="{{route('scservice.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif

                    <div class="modal-body">
                    <div>
                        <label for="">Service Name</label>
                        <input required name="service_name" type="text" id="service_name" class="form-control" placeholder="Enter name">
                    </div>
                    <div>
                        <label for="">Price</label>
                        <input required name="price" type="number" id="price" class="form-control" placeholder="Enter price">
                    </div>
                    <div>
                        <label for="">Description</label>
                        <input required name="description" type="text" id="description" class="form-control" placeholder="Enter description">
                    </div>
                    <label for="">Status</label>
                    <div>
                        <select class="form-control" name="status" id="status">
                        <option selected value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Image</label>
                        <input required name="image" type="file" id="image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success mt-3" >Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
@endsection

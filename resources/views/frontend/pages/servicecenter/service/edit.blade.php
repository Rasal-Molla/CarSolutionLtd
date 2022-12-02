@extends('frontend.master')


@section('content')
<div class="container-fluid">
    <div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="mt-3">
                    <h2 class="fs-5">Service Update Form</h2>
                </div>
            <div>
                <form action="{{route('scservice.update', $serviceData->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                        @csrf
                    <div class="modal-body">
                    <div>
                        <label for="">Service Name</label>
                        <input required value="{{$serviceData->service_name}}" name="service_name" type="text" class="form-control" placeholder="Enter name">
                    </div>
                    <div>
                        <label for="">Price</label>
                        <input required value="{{$serviceData->price}}" name="price" type="text" class="form-control" placeholder="Enter price">
                    </div>
                    <div>
                        <label for="">Description</label>
                        <input required value="{{$serviceData->description}}" name="description" type="text" class="form-control" placeholder="Enter description">
                    </div>
                    <label for="">Status</label>
                    <div>
                        <select class="form-control" name="status" id="">
                        <option @if($serviceData->status=='active') selected @endif value="active">Active</option>
                        <option @if($serviceData->status=='inactive') selected @endif value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Image</label>
                        <input name="image" type="file" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success mt-3" >Update</button>
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
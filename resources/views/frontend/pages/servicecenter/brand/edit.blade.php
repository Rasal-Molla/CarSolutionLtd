@extends('frontend.master')


@section('content')
<div class="container-fluid">
    <div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="mt-3">
                    <h2 class="fs-5">Brand Update Form</h2>
                </div>
            <div>
                <form action="{{route('scbrand.updateStore', $brandData->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                        @csrf


                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif

                    <div class="modal-body">
                    <div>
                        <label for="">Brand Name</label>
                        <input required value="{{$brandData->brand_name}}" name="brand_name" id="brand_name" type="text" class="form-control" placeholder="Enter name">
                    </div>
                    <div>
                        <label for="">Description</label>
                        <input required value="{{$brandData->description}}" name="description" type="text" id="description" class="form-control" placeholder="Enter description">
                    </div>
                    <label for="">Status</label>
                    <div>
                        <select class="form-control" name="status" id="status">
                        <option @if($brandData->status=='active') selected @endif value="active">Active</option>
                        <option @if($brandData->status=='inactive') selected @endif value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Image</label>
                        <input name="image" type="file" id="image" class="form-control">
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

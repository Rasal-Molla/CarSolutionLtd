@extends('frontend.master')


@section('content')
<div class="container-fluid">
    <div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="mt-3">
                    <h2 class="fs-5">Category Update Form</h2>
                </div>
            <div>
                <form action="{{route('sccategory.updateStore', $categoryinfo->id)}}" method="POST" enctype="multipart/form-data">

                    @method('PUT')
                    @csrf

                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif

                    <div class="modal-body">
                    <div>
                        <label for="">Category Name</label>
                        <input required value="{{$categoryinfo->name}}" name="name" type="text" id="name" class="form-control" placeholder="Enter name">
                    </div>
                    <label for="">Brand Name</label>
                    <select name="brand_id" id="" class="form-control">
                        @foreach ($brandinfo as $data)
                            <option  value="{{$data->id}}">{{$data->brand_name}}</option>
                        @endforeach
                    </select>
                    <div>
                        <label for="">Description</label>
                        <input required value="{{$categoryinfo->description }}" name="description" type="text" id="description" class="form-control" placeholder="Enter description">
                    </div>
                    <label for="">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option @if($categoryinfo->status=='active') selected @endif value="active">Active</option>
                        <option @if($categoryinfo->status=='inactive') selected @endif value="inactive">Inactive</option>
                    </select>
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

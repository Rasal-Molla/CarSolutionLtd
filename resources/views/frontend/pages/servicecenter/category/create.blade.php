@extends('frontend.master')


@section('content')
<div class="container-fluid">
    <div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="mt-3">
                    <h2 class="fs-5">Category Create Form</h2>
                </div>
            <div>
                <form action="{{route('sccategory.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif

                    <div class="modal-body">
                    <div>
                        <label for="">Category Name</label>
                        <input required name="name" type="text" id="name" class="form-control" placeholder="Enter name">
                    </div>
                    <label for="">Brand Name</label>
                    <select name="brand_id" id="" class="form-control">
                        @foreach ($brandlist as $data)
                            <option value="{{$data->id}}">{{$data->brand_name}}</option>
                        @endforeach
                    </select>
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

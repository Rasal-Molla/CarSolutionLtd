@extends('frontend.master')


@section('content')
<div class="container-fluid">
    <div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="mt-3">
                    <h2>Category Form</h2>
                </div>
            <div>
                <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-body">
                    <div>
                        <label for="">Category Name</label>
                        <input required name="name" type="text" class="form-control" placeholder="Enter name">
                    </div>
                    <div>
                        <label for="">Description</label>
                        <input required name="description" type="text" class="form-control" placeholder="Enter description">
                    </div>
                    <label for="">Status</label>
                    <div>
                        <select class="form-control" name="status" id="">
                        <option selected value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Image</label>
                        <input required name="image" type="file" class="form-control">
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
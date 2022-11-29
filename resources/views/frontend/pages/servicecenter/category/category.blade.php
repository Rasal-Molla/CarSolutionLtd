@extends('frontend.master')


@section('content')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-1">

        </div>
        <div class="col-10">
            <div class="mb-3">
            <h2>Category Table</h2>
            </div>
            <a href="{{route('sccategory.form')}}" class="btn btn-success">Add Category</a>
        <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>photo</td>
                    <td>Air Filter</td>
                    <td>Active</td>
                    <td>
                        <a href="" class="btn btn-success">Update</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-1">

        </div>
    </div>
</div>

@endsection

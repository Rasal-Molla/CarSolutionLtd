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
        <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>photo</td>
                    <td>Air Filter</td>
                    <td>Active</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-1">

        </div>
    </div>
</div>

@endsection

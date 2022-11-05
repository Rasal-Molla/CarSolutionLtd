@extends('backend.master')


@section('content')


<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h3 class="mb-4">Pending List</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Service Type</th>
                                        <th scope="col">Service Hour</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>CarHub</td>
                                        <td>carhub@gmail.com</td>
                                        <td>01700585588</td>
                                        <td>Dhanmondi-27</td>
                                        <td>Pick & Drop</td>
                                        <td>24 hour</td>
                                        <td>
                                            <a href="" class="btn btn-success">Accept</a>
                                            <a href="" class="btn btn-danger">Reject</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

@endsection
@extends('backend.master')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row g-2">
        <a href="{{route('category.create')}}"><div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-plus fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Create Category</p>          
                    </div>
            </div></a>
        </div>
    </div>
</div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h3 class="mb-4">Category List</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Model</th>
                                <th scope="col">Wheel</th>
                                <th scope="col">Engine</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Passenger Car</td>
                                <td>TOYOTA</td>
                                <td>SUV</td>
                                <td>Four Wheel</td>
                                <td>Straight Engine</td>
                                <td>
                                    <a class="btn btn-success" href="">Update</a>
                                    <a class="btn btn-danger" href="">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>MotorCycle</td>
                                <td>Yamaha</td>
                                <td>R15</td>
                                <td>Two Wheel</td>
                                <td>V Engine</td>
                                <td>
                                    <a class="btn btn-success" href="">Update</a>
                                    <a class="btn btn-danger" href="">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Bus</td>
                                <td>TOYOTA</td>
                                <td>Capsul</td>
                                <td>Six Wheel</td>
                                <td>V Engine</td>
                                <td>
                                    <a class="btn btn-success" href="">Update</a>
                                    <a class="btn btn-danger" href="">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>


@endsection
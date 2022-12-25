
@extends('backend.master')


@section('content')
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Customer</p>
                                <h6 class="mb-0">{{$totalCustomer}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Service Center</p>
                                <h6 class="mb-0">{{$totalServiceCenter}}</h6>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- Recent service center Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Service Center</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($serviceCenter as $key=>$data)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->phone}}</td>
                                        <td>{{$data->address}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent service center End -->

                        <!-- Recent customer Start -->
                        <div class="container-fluid pt-4 px-4">
                            <div class="bg-secondary text-center rounded p-4">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h6 class="mb-0">Recent Customer</h6>
                                </div>
                                <div class="table-responsive">
                                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                                        <thead>
                                            <tr class="text-white">
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone</th>
                                                <th scope="col">Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($customer as $key=>$data)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$data->name}}</td>
                                                    <td>{{$data->email}}</td>
                                                    <td>{{$data->phone}}</td>
                                                    <td>{{$data->address}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Recent customer end -->


@endsection

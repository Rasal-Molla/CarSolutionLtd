@extends('backend.master')


@section('content')

<div class="container-fluid pt-4 px-4">
                <div class="row g-2">
                    <a href="{{route('servicecenter.make')}}"><div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-plus fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Make Service Center</p>
                                
                            </div>
                        </div></a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="{{route('servicecenter.total')}}"><div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Service Center</p>
                                <h6 class="mb-0">34</h6>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="{{route('servicecenter.pending')}}"><div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-spinner fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Pending Service Center</p>
                                <h6 class="mb-0">3</h6>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <a href="{{route('servicecenter.ratting')}}"><div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Service Center Ratting</p>
                                <h6 class="mb-0">4</h6>
                            </div>
                        </div>
                    </div></a>
                </div>
            </div>


            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Service Center table</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Image</th>
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

                                @if(session()->has('message'))
                                    <p class="alert alert-success">{{session()->get('message')}}</p>
                                @endif

                                @if(session()->has('error'))
                                    <p class="alert alert-success">{{session()->get('error')}}</p>
                                @endif
                                    @foreach($service_list as $key=>$data)
                                    <tr>
                                        <th scope="row">{{$key+1}}</th>
                                        <td>
                                            <img width="70px" src="{{url('/uploads/'.$data->image)}}" alt="Image">
                                        </td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->phone}}</td>
                                        <td>{{$data->location}}</td>
                                        <td>{{$data->service_type}}</td>
                                        <td>{{$data->service_hour}}</td>
                                        <td>
                                            <a class="btn btn-danger" href="{{route('service.center.delete',$data->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$service_list->links()}}
                        </div>
                    </div>
                </div>
            </div>
@endsection
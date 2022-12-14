@extends('backend.master')

@section('content')
{{-- <div class="container-fluid pt-4 px-4">
    <div class="row g-2">
        <a href="{{route('user.create')}}"><div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-plus fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Create User</p>
                    </div>
            </div></a>
        </div>
    </div>
</div> --}}

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h3 class="mb-4">Customer List</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(session()->has('message'))
                            <p class="alert alert-success">{{session()->get('message')}}</p>
                        @endif
                        @if(session()->has('error'))
                            <p class="alert alert-success">{{session()->get('error')}}</p>
                        @endif
                            @foreach($user_list as $key=>$data)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>
                                    <img width="70px" style="border-radius:10px" src="{{url('/uploads/'. $data->image)}}" alt="User_Image">
                                </td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->address}}</td>
                                {{-- <td>
                                    <a href="{{route('user.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

@endsection

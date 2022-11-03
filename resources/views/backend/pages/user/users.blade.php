@extends('backend.master')

@section('content')
<div class="container pt-3 bg-secondary m-3">
  <h2>User List</h2>
  <a href="{{route('user.create')}}" class="btn btn-success">Create User</a>
<table class="table table-hover table-dark pt-5 my-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">phone</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($user_list as $data)
  
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->phone}}</td>
      <td>{{$data->address}}</td>
      <td>{{$data->gender}}</td>
      <td>
        <a href="" class="btn btn-outline-info">View</a>
        <a href="" class="btn btn-outline-success">Update</a>
        <a href="" class="btn btn-outline-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection
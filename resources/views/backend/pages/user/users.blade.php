@extends('backend.master')

@section('content')
<div class="container pt-3">
  <h2>User List</h2>
  <a href="{{route('user.create')}}" class="btn btn-outline-success">Create User</a>
<table class="table table-hover table-dark pt-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">phone</th>
      <th scope="col">Password</th>
      <th scope="col">Address</th>
      <th scope="col">Birthdate</th>
      <th scope="col">Gender</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Smith</td>
      <td>smith@gmail.com</td>
      <td>01700565431</td>
      <td>********</td>
      <td>America</td>
      <td>10/10/1990</td>
      <td>Male</td>
    </tr>
    <tr>
    <th scope="row">2</th>
      <td>Steven</td>
      <td>steven@gmail.com</td>
      <td>01700569831</td>
      <td>********</td>
      <td>Canada</td>
      <td>08/05/1987</td>
      <td>Male</td>
    </tr>
    <tr>
    <th scope="row">3</th>
      <td>Carolina</td>
      <td>carolina@gmail.com</td>
      <td>01700325431</td>
      <td>********</td>
      <td>England</td>
      <td>10/09/1998</td>
      <td>Female</td>
    </tr>
  </tbody>
</table>
</div>

@endsection
@extends('backend.master')

@section('content')

<div class="container pt-3">
    <h2>Category List</h2>
    <a href="{{route('category.create')}}" class="btn btn-outline-success">Create category</a>
    <table class="table table-hover table-dark pt-5">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Model</th>
            <th scope="col">Wheel Type</th>
            <th scope="col">Engin Type</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Audi</td>
            <td>Sports</td>
            <td>Four wheel</td>
            <td>Auto gear</td>
        </tr>
        <tr>
        <th scope="row">2</th>
            <td>BMW</td>
            <td>SUV</td>
            <td>Four Wheel</td>
            <td>Auto gear</td>
        </tr>
        <tr>
        <th scope="row">3</th>
            <td>Ford</td>
            <td>Sports</td>
            <td>Four Wheel</td>
            <td>Auto gear</td>
        </tr>
        </tbody>
    </table>
</div>


@endsection
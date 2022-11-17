@extends('backend.master')


@section('content')
<div class="container">
    <div class="">
        <img src="{{url('/uploads/', $viewData->image)}}" alt="Image">
        <h4>Category Name: {{$viewData->name}}</h4>
        <h4>Category Status: {{$viewData->status}}</h4>
        <h4>Category Description: {{$viewData->description}}</h4>
    </div>
</div>




@endsection
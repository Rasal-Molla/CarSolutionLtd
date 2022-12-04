@extends('frontend.master')


@section('content')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-1">

        </div>
        <div class="col-10">
            <div class="mb-3">
            <h2>Booking Information</h2>
            </div>
            <div>
                <a href="{{route('customer.bookingForm')}}" class="btn btn-success">Book Now</a>
            </div>
        <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Service Center</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Service</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($bookingList as $key=>$list)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$list->Customer_name}}</td>
                    <td>{{$list->phone}}</td>
                    <td>{{$list->serviceCenter->name}}</td>
                    <td>{{$list->brand->brand_name}}</td>
                    <td>{{$list->model}}</td>
                    <td>{{$list->service->service_name}}</td>
                    <td>{{$list->status}}</td>
                    <td>
                        @if($list->status == 'Pending')
                        <a href="{{route('customer.bookingEdit', $list->id)}}" class="btn btn-success">Update</a>
                        <a href="{{route('customer.bookingDelete', $list->id)}}" class="btn btn-danger">Delete</a>
                        @elseif($list->status == 'Approved')

                            Progressing

                        @else
                        
                            Done
                        
                        @endif
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-1">
        </div>
    </div>
</div>



@endsection
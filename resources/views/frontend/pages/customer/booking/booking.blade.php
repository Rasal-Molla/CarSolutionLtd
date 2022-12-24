@extends('frontend.master')


@section('content')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
            <h2>Booking Information</h2>
            </div>
        <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Service Center</th>
                    <th scope="col">Service</th>
                    <th scope="col">Price</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Advance</th>
                    <th scope="col">Due</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($bookingList as $key=>$list)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$list->created_at->format('d/m/Y')}}</td>
                    <td>{{$list->Customer_name}}</td>
                    <td>{{$list->phone}}</td>
                    <td>{{$list->serviceCenter->name}}</td>
                    <td>{{$list->service->service_name}}</td>
                    <td>{{$list->price}} BDT</td>
                    <td>{{$list->amount}}</td>
                    <td>{{$list->advance_payment}} BDT</td>
                    <td>@if ($list->due_payment)
                            <a href="{{route('duePayment', $list->id)}}" class="btn btn-danger">Clear {{$list->due_payment}} BDT</a>
                    @else
                        0 BDT
                    @endif</td>
                    <td>{{$list->status}}</td>
                    <td>
                        @if($list->status == 'Approved')
                        <a href="{{route('customer.bookingEdit', $list->id)}}" class="btn btn-success">Update</a>
                        {{-- <a href="{{route('customer.bookingDelete', $list->id)}}" class="btn btn-danger">Delete</a> --}}

                        @else

                        <a href="{{route('customer.bookingDetails', $list->id)}}" class="btn btn-success">Details</a>

                        @endif
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection

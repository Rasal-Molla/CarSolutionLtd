@extends('backend.master')



@section('content')

<div class="container-fluid col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4 m-3 ">
        <h3 class="mb-4">Search From</h3>
            <form action="{{route('report.search')}}" method="get">

                @csrf
                <div class="mb-3">
                    <label for="brand_name" class="form-label">From:</label>
                    <input type="date" class="form-control" id="from_date" name="from_date">
                </div>
                <div class="mb-4">
                    <label for="description" class="form-label">To:</label>
                    <input type="date" class="form-control" id="to_date" name="to_date">
                </div>
                <button type="submit" class="btn btn-success">Search</button>
            </form>
    </div>
</div>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">All Released Boking</h6>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">ID</th>
                        <th scope="col">Service Center</th>
                        <th scope="col">Price</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reports as $key=>$report)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$report->serviceCenter->name}}</td>
                        <td>{{$report->price}}</td>
                        <td>{{$report->amount}}</td>
                        <td>{{$report->status}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

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

<div class="container-fluid pt-4 px-4"id='printableArea'>
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">All Released Boking Reports</h6>
        </div>
        <div class="table-responsive">
            <h1 class="mb-3">Date: {{date('Y-m-d')}}</h1>
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


<div class="container-fluid mt-3 mb-3">
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-2"><button type="submit" onclick="printDiv('printableArea')" value="print a div!" style="border-radius: 5px" class="btn btn-success btn-md">Print Report</button></div>
        <div class="col-md-5"></div>
    </div>
</div>




<script>
    function printDiv(divName)
        {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
</script>


@endsection

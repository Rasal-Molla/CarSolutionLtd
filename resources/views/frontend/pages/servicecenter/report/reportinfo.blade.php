@extends('frontend.master')


@section('content')

<div class="container-fluid">
    <div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="mt-3">
                    <h2 class="fs-5">Reports</h2>
                </div>
            <div>
                <form action="{{route('screport.generate')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="modal-body">
                    <div>
                        <label for="">From</label>
                        <input required name="from_date" type="date" class="form-control">
                    </div>
                    <div>
                        <label for="">To</label>
                        <input required name="to_date" type="date" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success mt-3" >Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>

<!-- Report table start form here -->

<div class="container-fluid" id="printableArea">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr class="bg-dark">
                        <th scope="col">ID</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Service Center</th>
                        <th scope="col">Service</th>
                        <th scope="col">Price</th>
                        <th scope="col">Payment</th>
                        <th scope="col">Transction</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reportdata as  $key=>$data )
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$data->Customer_name}}</td>
                            <td>{{$data->phone}}</td>
                            <td>{{$data->serviceCenter->name}}</td>
                            <td>{{$data->service->service_name}}</td>
                            <td>{{$data->price}}</td>
                            <td>{{$data->payment}}</td>
                            <td>{{$data->transaction_id}}</td>
                            <td>{{$data->status}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" onclick="printDiv('printableArea')" value="print a div!" class="btn btn-success">Print</button>
        </div>
        <div class="col-md-2"></div>
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

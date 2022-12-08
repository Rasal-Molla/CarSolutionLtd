@extends('frontend.master')


@section('content')


<div class="text-start text-black p-4" id="printableArea">
    <div class="text-center fw-bold fs-5">Customer Invoice</div>
                <h5 class="mb-3" style="color: #35558a;">Customer Name: {{auth()->user()->name}}</h5>
                <h4 class="mb-3" style="color: #35558a;">Customer Phone: {{auth()->user()->phone}}</h4>
                <h4 class="mb-3" style="color: #35558a;">Address: {{auth()->user()->address}}</h4>
                <h4 class="mb-3" style="color: #35558a;">Pickup Address: {{$bookingData->address_1}}</h4>
                <p class="mb-0" style="color: #35558a;">Booking summary</p>
                <hr class="mt-2 mb-4"
                  style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">

                <div class="d-flex justify-content-between">
                  <p class="fw-bold mb-0">Service Center Name: {{$bookingData->ServiceCenter->name}}</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p class="small">Service Name: {{$bookingData->service->service_name}}</p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <p class="small">Brand Name: {{$bookingData->brand->brand_name}} </p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <p class="small">Brand Model: {{$bookingData->model}} </p>
                  </div>

                <div class="d-flex justify-content-between pb-1">
                  <p class="small">Special Request: {{$bookingData->special_request}}</p>
                </div>

                <div class="d-flex justify-content-between">
                  <p class="fw-bold">Total Price:</p>
                  <p class="fw-bold" style="color: #35558a;">BDT {{$bookingData->price}}/=</p>
                </div>
                <hr class="mt-2 mb-4"
                  style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">

                  <div class="d-flex justify-content-between pb-1">
                    <p class="fw-bold">Project Work Status: {{$bookingData->status}}</p>
                  </div>

              </div>
              <div class="modal-footer d-flex justify-content-center border-top-0 py-4">
                <button type="submit" onclick="printDiv('printableArea')" value="print a div!" class="btn btn-primary btn-lg mb-1" style="background-color: #35558a;">
                  Invoice
                </button>
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

@extends('frontend.master')


@section('content')

<style type="text/css">
    .order-form .container {
        color: #4c4c4c;
        padding: 20px;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1);
    }

    .order-form-label {
        margin: 8px 0 0 0;
        font-size: 14px;
        font-weight: bold;
    }

    .order-form-input {
        width: 100%;
        padding: 8px 8px;
        border-width: 1px !important;
        border-style: solid !important;
        border-radius: 3px !important;
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        font-weight: normal;
        font-style: normal;
        line-height: 1.2em;
        background-color: transparent;
        border-color: #cccccc;
    }

    .btn-submit:hover {
        background-color: #090909 !important;
    }
</style>

<section class="order-form my-4 mx-4">
    <div class="container pt-4">

        <div class="row">
            <div class="col-12">
                <div class="text-center fs-5 mb-3">
                    <h1>Payment Due Form</h1>
                    <hr class="mt-1">
                </div>

            </div>
            <div class="col-12">

                <form action="{{route('payNow.due',$duePayment->id)}}" method="post">

                    @csrf

                    <div class="row mx-4">
                        <div class="col-12 col-sm-12">
                            <label for="">Current Due</label>
                            <input type="text" name="due_payment" value="{{$duePayment->due_payment}}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <button type="submit" id="btnSubmit"
                                class="btn btn-dark d-block mx-auto btn-submit">Submit</button>
                        </div>
                    </div>

            </div>
            </form>
        </div>
    </div>
</section>

@endsection


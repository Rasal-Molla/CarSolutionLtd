@extends('frontend.master')


@section('content')

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-1">

        </div>
        <div class="col-10">
            <div class="mb-3">
            <h2 class="fs-5">Request Table</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Service</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>01700585588</td>
                    <td>Audi</td>
                    <td>Sports</td>
                    <td>Air filter</td>
                    <td>1500 BDT</td>
                    <td>
                        <select name="" id="">
                            <option selected value="pending">Pending</option>
                            <option value="accept">Accept</option>
                            <option value="relesed">Relesed</option>
                        </select>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
        <div class="col-1">

        </div>
    </div>
</div>

@endsection

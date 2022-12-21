@extends('frontend.master')


@section('content')
<div class="container-fluid">
    <div>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="mt-3">
                    <h2 class="fs-5">Send your message</h2>
                </div>
            <div>
                <form action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if($errors->any())
                        @foreach($errors->all() as $message)
                            <p class="alert alert-danger">{{$message}}</p>
                        @endforeach
                    @endif

                    <div class="modal-body">
                    <div>
                        <label for="">Name</label>
                        <input required name="name" id="name" type="text" class="form-control" placeholder="Enter name">
                    </div>
                    <div>
                        <label for="">Phone</label>
                        <input required name="phone" id="phone" type="tel" class="form-control" placeholder="Enter your number">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input required name="email" id="email" type="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <div>
                        <label for="">Message</label>
                        <textarea required name="message" class="form-control" type="text" id="message" cols="30" rows="5" placeholder="Enter message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-3" >Send Message</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
</div>
@endsection

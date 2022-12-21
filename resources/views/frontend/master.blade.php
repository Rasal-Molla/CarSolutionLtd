
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CarSolution Ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{url('/Frontend/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('/Frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{url('/Frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('/Frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('/Frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('/Frontend/css/style.css')}}" rel="stylesheet">

    @notifyCss

    <style type="text/css"> .notify{z-index: 1000000; margin-top: 5px;}</style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->

    <!-- Topbar End -->




    <!-- Navbar Start -->


    @include('frontend.fixed.navbar')

    <!-- Navbar End -->


    <!-- Content Start -->

    <x:notify-messages />
    @yield('content')

    <!-- Content End -->


    <!-- Footer Start -->

    @include('frontend.fixed.footer')

    <!-- Footer End -->



<!--SignUp Modal Start -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">SignUp Please</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Customer</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Service-Center</button>
                    </div>
                </nav>
                <!--SignUp Modal start for customer-->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <form action="{{route('user.signup')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if($errors->any())
                            @foreach($errors->all as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif
                            <div>
                                <label for="">Name</label>
                                <input required name="name" type="text" id="name" class="form-control" placeholder="Enter name">
                            </div>
                            <div>
                                <label for="">Email</label>
                                <input required name="email" type="email" id="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div>
                                <label for="">Phone</label>
                                <input required name="phone" type="tel" id="phone" class="form-control" placeholder="Enter number">
                            </div>
                            <div>
                                <label for="">Address</label>
                                <input required name="address" type="text" id="address" class="form-control" placeholder="Enter address">
                            </div>
                            <label for="">Select Country</label>
                            <select name="country" id="country" class="form-control">
                                <option value="bangladesh">Bangladesh</option>
                                <option value="india">India</option>
                                <option value="pakistan">Pakistan</option>
                                <option value="nepal">Nepal</option>
                            </select>
                            <div>
                                <label for="">Image</label>
                                <input required name="image" type="file" id="image" class="form-control">
                            </div>
                            <div>
                                <label for="">Password</label>
                                <input required name="password" type="password" id="password" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Closed</button>
                                <button type="submit" class="btn btn-primary">SignUp</button>
                            </div>
                    </form>
                </div>
                <!--SignUp Modal end for customer-->

                <!--SignUp Modal start for service center-->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <form action="{{route('service.signup')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @if($errors->any())
                            @foreach($errors->all as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif
                        
                            <div>
                                <label for="">Name</label>
                                <input required name="name" type="text" id="name" class="form-control" placeholder="Enter name">
                            </div>
                            <div>
                                <label for="">Email</label>
                                <input required name="email" type="email" id="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div>
                                <label for="">Phone</label>
                                <input required name="phone" type="tel" id="phone" class="form-control" placeholder="Enter number">
                            </div>
                            <div>
                                <label for="">Address</label>
                                <input required name="address" type="text" id="address" class="form-control" placeholder="Enter address">
                            </div>
                            <label for="">Select Country</label>
                            <select name="country" id="country" class="form-control">
                                <option value="bangladesh">Bangladesh</option>
                                <option value="india">India</option>
                                <option value="pakistan">Pakistan</option>
                                <option value="nepal">Nepal</option>
                            </select>
                            <div>
                                <label for="">Image</label>
                                <input required name="image" type="file" id="image" class="form-control">
                            </div>
                            <div>
                                <label for="">Password</label>
                                <input required name="password" type="password" id="password" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Closed</button>
                                <button type="submit" class="btn btn-primary">SignUp</button>
                            </div>
                    </form>
                </div>
            </div>
            <!--SignUp Modal end for service center-->
            </div>
        </div>
    </div>
</div>

<!--SignUp Modal End -->


<!--Login Modal Start -->

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login Please</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('user.login')}}" method='post'>
            @if($errors->any())
                @foreach($errors->all as $messaege)
                    <p class="alert alert-danger">{{$message}}</p>
                @endforeach
            @endif

            @csrf
        <div class="modal-body">
            <div>
                <label for="">Email</label>
                <input required name="email" type="email" class="form-control" required placeholder="Enter email">
            </div>
            <div>
                <label for="">Password</label>
                <input required name="password" type="password" class="form-control" required placeholder="Enter password">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Closed</button>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--Login Modal end -->





    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{url('/Frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{url('/Frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('/Frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('/Frontend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{url('/Frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('/Frontend/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{url('/Frontend/js/main.js')}}"></script>
    <script src="{{url('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <!-- <script src="{{url('/Frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script> -->

    <!-- Template Javascript -->
    <script src="{{url('/Frontend/js/main.js')}}"></script>

    @notifyJs
</body>

</html>

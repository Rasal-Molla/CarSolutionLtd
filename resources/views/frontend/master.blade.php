
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


    @yield('content')

    <!-- Content End -->


    <!-- Footer Start -->
    
    @include('frontend.fixed.footer')

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/Frontend/lib/wow/wow.min.js')}}"></script>
    <script src="{{url('/Frontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('/Frontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('/Frontend/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{url('/Frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('/Frontend/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{url('/Frontend/js/main.js')}}lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{url('/Frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('/Frontend/js/main.js')}}"></script>
</body>

</html>
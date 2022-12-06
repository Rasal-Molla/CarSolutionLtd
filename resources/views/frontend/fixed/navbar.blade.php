<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarSolution</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('Home')}}" class="nav-item nav-link active">Home</a>
                <a href="{{route('Home.about')}}" class="nav-item nav-link">About</a>
                <a href="{{route('Home.service')}}" class="nav-item nav-link">Services</a>
                <a href="{{route('Home.serviceCenter')}}" class="nav-item nav-link">Service Center</a>
                <a href="{{route('Home.brand')}}" class="nav-item nav-link">Brands</a>
                <a href="{{route('Home.category')}}" class="nav-item nav-link">Category</a>
                <a href="{{route('Home.book')}}" class="nav-item nav-link">Booking</a>
                <a href="" class="nav-item nav-link">feedback</a>
                @auth

                @if(auth()->user()->role=='customer')

                <div class="dropdown">
                <a href="" class="nav-item nav-link dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{auth()->user()->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <a href="{{route('customer.profile')}}" class="dropdown-item" type="button">Profile</a>
                    <a href="{{route('customer.booking')}}" class="dropdown-item" type="button">Booking</a>
                    <a href="" class="dropdown-item" type="button">Payment</a>
                    <a href="" class="dropdown-item" type="button">Invoice</a>
                    <a href="{{route('user.logout')}}" class="dropdown-item" type="button">Logout</a>
                </div>
                </div>

                @else
                <div class="dropdown">
                <a href="" class="nav-item nav-link dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{auth()->user()->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <a href="{{route('scprofile')}}" class="dropdown-item" type="button">Profile</a>
                    <a href="{{route('screquest.list')}}" class="dropdown-item" type="button">Request</a>
                    <a href="{{route('sccategory.list')}}" class="dropdown-item" type="button">Category</a>
                    <a href="{{route('scservice.list')}}" class="dropdown-item" type="button">Service</a>
                    <a href="{{route('sccompleted.list')}}" class="dropdown-item" type="button">Completed</a>
                    <a href="" class="dropdown-item" type="button">Payment</a>
                    <a href="" class="dropdown-item" type="button">Invoice</a>
                    <a href="{{route('user.logout')}}" class="dropdown-item" type="button">Logout</a>
                </div>
                </div>
                @endif

                @else
                <a href="" class="nav-item nav-link" data-toggle="modal" data-target="#login">Login</a>
                <a href="" class="nav-item nav-link" data-toggle="modal" data-target="#signup">SignUp</a>
                @endauth
            </div>
        </div>
    </nav>
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>CarSolution</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{url('/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{auth()->user()->email}}</h6>
                        <span>{{auth()->user()->name}}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route('dashboard')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="{{route('user')}}" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Customer</a>
                    <a href="{{route('service')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Services</a>
                    <a href="{{route('category')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Categories</a>
                    <a href="{{route('brand')}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Brand</a>
                    <a href="{{route('payment')}}" class="nav-item nav-link"><i class="fa fa-credit-card me-2"></i>Payment</a>
                    <a href="{{route('feedback')}}" class="nav-item nav-link"><i class="fa fa-comments me-2"></i>Feedback</a>
                    <a href="{{route('report')}}" class="nav-item nav-link"><i class="fa fa-flag me-2"></i>Reports</a>
                </div>
            </nav>
        </div>

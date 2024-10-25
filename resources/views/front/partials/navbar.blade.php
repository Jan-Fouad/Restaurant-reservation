<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
            <!-- <img src="{{asset('assets')}}/img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="{{ route('front.index') }}" class="nav-item nav-link @yield('index-nav') ">Home</a>
                <a href="{{ route('front.about') }}" class="nav-item nav-link @yield('about-nav')">About</a>
                <a href="{{ route('front.service') }}" class="nav-item nav-link @yield('service-nav')">Service</a>
                <a href="{{ route('front.menu') }}" class="nav-item nav-link @yield('menu-nav')">Menu</a>
                <a href="{{ route('front.contact') }}" class="nav-item nav-link @yield('contact-nav')">Contact</a>
            </div>
            <a href="{{ route('front.booking') }}" class="btn btn-primary py-2 px-4">Book A Table</a>
        </div>
    </nav>

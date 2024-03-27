<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('front.index') }}" class="navbar-brand p-0">
        <h1 class="m-0">BizConsult</h1>
        <!-- <img src="{{ asset('assets-front') }}/img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('front.index') }}" class="nav-item nav-link @yield('home-active')">Home</a>
            <a href="{{ route('front.about') }}" class="nav-item nav-link @yield('about-active')">About</a>
            <a href="{{ route('front.service') }}" class="nav-item nav-link @yield('service-active')">Service</a>
            <a href="{{ route('front.contact') }}" class="nav-item nav-link @yield('contact-active')">Contact</a>
        </div>
    </div>
</nav>

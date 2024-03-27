<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>{{ $settings->address }}</p>
                <p><i class="fa fa-phone-alt me-3"></i>{{ $settings->phone }}</p>
                <p><i class="fa fa-envelope me-3"></i>{{ $settings->email }}</p>
                <div class="d-flex pt-2">
                    @if ($settings->twitter)
                        <a class="btn btn-outline-light btn-social" target="_blank" href="{{ $settings->twitter }}"><i
                                class="fab fa-twitter"></i></a>
                    @endif

                    @if ($settings->facebook)
                        <a class="btn btn-outline-light btn-social" target="_blank" href="{{ $settings->facebook }}"><i
                                class="fab fa-facebook-f"></i></a>
                    @endif

                    @if ($settings->youtube)
                        <a class="btn btn-outline-light btn-social" target="_blank" href="{{ $settings->youtube }}"><i
                                class="fab fa-youtube"></i></a>
                    @endif

                    @if ($settings->instagram)
                        <a class="btn btn-outline-light btn-social" target="_blank" href="{{ $settings->instagram }}"><i
                                class="fab fa-instagram"></i></a>
                    @endif

                    @if ($settings->linkedin)
                        <a class="btn btn-outline-light btn-social" target="_blank" href="{{ $settings->linkedin }}"><i
                                class="fab fa-linkedin-in"></i></a>
                    @endif

                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <h5 class="text-white mb-4">Quick Link</h5>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Career</a>
            </div>
            <div class="col-md-6 col-lg-4">
                <h5 class="text-white mb-4">Popular Link</h5>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Career</a>
            </div>
        </div>
    </div>
    @include('front.partials.copyright')
</div>
<!-- Footer End -->

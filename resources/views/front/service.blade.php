@extends('front.master')

@section('title', 'Service')
@section('service-active', 'active')

@section('hero')
    <x-hero-section title="Services" subtitle="Services"></x-hero-section>
@endsection

@section('content')
    <!-- Service Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Services</div>
                <h2 class="mb-5">We Provide Solutions On Your Business</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-user-tie fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Business Research</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                                sed stet lorem.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-chart-pie fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Stretagic Planning</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                                sed stet lorem.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-chart-line fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Market Analysis</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                                sed stet lorem.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-chart-area fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Financial Analaysis</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                                sed stet lorem.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-balance-scale fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">legal Advisory</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                                sed stet lorem.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item rounded h-100">
                        <div class="d-flex justify-content-between">
                            <div class="service-icon">
                                <i class="fa fa-house-damage fa-2x"></i>
                            </div>
                            <a class="service-btn" href="">
                                <i class="fa fa-link fa-2x"></i>
                            </a>
                        </div>
                        <div class="p-5">
                            <h5 class="mb-3">Tax & Insurance</h5>
                            <span>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam
                                sed stet lorem.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Testimonial</div>
                <h2 class="mb-5">What Our Clients Say!</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle"
                            src="{{ asset('assets-front') }}/img/testimonial-1.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle"
                            src="{{ asset('assets-front') }}/img/testimonial-2.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle"
                            src="{{ asset('assets-front') }}/img/testimonial-3.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                        diam</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle"
                            src="{{ asset('assets-front') }}/img/testimonial-4.jpg">
                        <div class="ps-3">
                            <h6 class="mb-1">Client Name</h6>
                            <small>Profession</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection

<!-- Features Start -->
@if (count($features) > 0)
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Features</div>
                    <h2 class="mb-4">Why People Choose Us? We Are Trusted & Award Wining Agency</h2>
                    <p>Clita nonumy sanctus nonumy et clita tempor, et sea amet ut et sadipscing rebum amet takimata
                        amet, sed accusam eos eos dolores dolore et. Et ea ea dolor rebum invidunt clita eos. Sea
                        accusam stet stet ipsum, sit ipsum et ipsum kasd</p>
                    <p>Et ea ea dolor rebum invidunt clita eos. Sea accusam stet stet ipsum, sit ipsum et ipsum kasd
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-5">
                        @foreach ($features as $feature)
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                                        <i class="fa {{ $feature->icon }} text-white"></i>
                                    </div>
                                    <h6 class="mb-0">{{ $feature->title }}</h6>
                                </div>
                                <span>{{ $feature->description }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<!-- Features End -->

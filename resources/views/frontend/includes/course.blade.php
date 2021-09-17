<div class="about-area ptb-100 bg-f9fbff">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-image"><img src="assets/images/about-img12.png" alt="image" /></div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-content"><span class="sub-title">{{ $homepage->coursesubtitle }}</span>
                    <h2>{{ $homepage->coursetitle }}</h2>
                    <p>{{ $homepage->coursedescription }}</p>
                    <ul class="features-list">
                        <li><span><i class="flaticon-experience"></i> {{ $homepage->feature1 }}</span></li>
                        <li><span><i class="flaticon-time-left"></i> {{ $homepage->feature2 }}</span></li>
                        <li><span><i class="flaticon-tutorials"></i> {{ $homepage->feature3 }}</span></li>
                        <li><span><i class="flaticon-self-growth"></i> {{ $homepage->feature4 }}</span></li>
                    </ul>
                    <a class="default-btn" href="/all-course">
                        <i class="flaticon-user"></i>View All Courses<span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="bulb"><img src="{{ asset('assets/images/bulb.png') }}" alt="image" /></div>
</div>
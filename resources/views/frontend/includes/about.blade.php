<div class="about-area-two ptb-100">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-12">
          <div class="about-content-box">
            <h2>{{ $about->title }}</h2>
            {!! $about->content !!}
          </div>
        </div>
        <div class="col-lg-7 col-md-12">
          <div class="about-video-box">
            <div class="image">
              <img src="@if($about->image) {{ asset('images/'.$about->image) }} @else {{ asset('assets/images/about-img5.jpg')}} @endif" alt="image" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
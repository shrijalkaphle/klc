<div class="main-banner-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="main-banner-content-style-two">
                    <div class="about-content">
                        <h1>{{ $homepage->title }}</h1>
                        {!! $homepage->content !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="main-banner-image-style-two"><img src="@if($homepage->image) {{ asset('images/'.$homepage->image) }} @else {{ asset('assets/images/banner-img4.png') }} @endif" alt="image" /></div>
            </div>
        </div>
    </div>
</div>

<style>
	.main-banner-area {
      padding-top:7px !important;
      padding-bottom:0;
      background:#F5F7FA
    }
</style>
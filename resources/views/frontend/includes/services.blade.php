<div class="features-area pt-100 pb-70 bg-fff8f8">
    <div class="container">
        <div class="section-title">
          <span class="sub-title">We Have Wide Range Of Universities</span>
            <h2>We Provide Best Services</h2>
        </div>
        <div class="row justify-content-center">
            @foreach($services as $service)
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="features-box">
                    <img src="/images/{{ $service->image }}" alt="{{ $service->title }}" style="height:13em">
                    <div class="features-content">
                      	<h3 style="height:2em;line-height:1em;overflow:hidden;text-align:center">{{ $service->title }}</h3>
                    	<div style="height:12em;line-height:1em;overflow:hidden;">
                        	<p>{!! $service->description !!}</p>
                    	</div>
                  </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .features-area {
      	padding-top: 50px;
      	padding-bottom: 20px;
    }
    .features-area .section-title {
     	margin-bottom: 40px
    }
	.features-box {
      	padding:0 !important
    }
  	.features-content {
    	padding:20px
  	}
</style>
<div class="testimonials-area ptb-100">
    <div class="container">
        <div class="section-title"><span class="sub-title">Testimonials</span>
            <h2>What People Say About KLC</h2>
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach($testimonials as $t)
                        <li class="splide__slide">
                            <div class="testimonial">
                                <img src="{{ asset('images/'.$t->photo) }}" class="rounded-circle" style="height: 130px" alt="">
                                <br>
                                <p>{{$t->comments}}</p>
                                <h5>{{$t->name}}</h5>
                                <small>{{$t->status}}</small>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
  	.testimonials-area {
      padding-top: 60px;
      padding-bottom: 60px
    }
  	.testimonials-area .container {
      padding:0
    }
	.section-title {
      max-width:100% !important;
      margin:0
    }
  	.testimonial p {
      max-width: 100%
    }
</style>
@foreach($texts->where('block_position','=',$l->id) as $text)
<div class="about-area ptb-100 bg-f9fbff">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
              	@if($text->imageposition == 'left')
              		<div class="about-image"><img src="/images/{{ $text->image }}" alt="image" /></div>
              	@else
              		<div class="about-content">
                  		<span class="sub-title">{{ $text->subtitle }}</span>
                  		<h2>{{ $text->title }}</h2>
                  		<p>{!! $text->content !!}</p>
              		</div>
              	@endif
            </div>
            <div class="col-lg-6 col-md-12">
                @if($text->imageposition == 'right')
                    <div class="about-image"><img src="/images/{{ $text->image }}" alt="image" /></div>
                @else
                    <div class="about-content">
                        <span class="sub-title">{{ $text->subtitle }}</span>
                        <h2>{{ $text->title }}</h2>
                        <p>{!! $text->content !!}</p>
                    </div>
                @endif
        	</div>
    	</div>
	</div>
</div>
@endforeach
<style>
	.about-area {
      padding-top: 10px;
      padding-bottom: 10px
  }
</style>
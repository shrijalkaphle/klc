@extends('layout.frontend')


@section('title','About Us | ' . $sitesetting->title)

@section('body')

@foreach ($layout as $l)
    @include('frontend.includes.'.$l->title)    
@endforeach
  
@endsection

@section('script')
<style>
  .testimonials-area h2 {
    margin-bottom: 25px
  }
  .testimonial {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-items: center;
  }
  .testimonial p {
    font-style: italic;
    font-color: black
  }
  .testimonial h5 {
    font-weight: 700 !important;
    font-color: black
  }
</style>
@if($about->banner)
  <style>
    .page-title-area {
      background: url({{ asset('images/'.$about->banner) }});
      background-repeat: no-repeat;
      background-position: center center;
    }
    .page-title-area h2 {
      color: white !important;
    }
  </style>
@endif
    <script>
        var splide = new Splide( '.splide', {
          type   : 'loop',
          perPage: 1,
          perMove: 1,
          arrows: false,
          pagination: false,
          autoplay: true,
          interval: 3000,
          pauseOnHover: true,

        } )
        splide.mount()
        $('.about').addClass('active')
    </script>
@endsection
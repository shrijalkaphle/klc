@extends('layout.frontend')

@section('title', $sitesetting->title)

@section('body')

@foreach ($layout as $l)
    @include('frontend.includes.'.$l->title)    
@endforeach

@endsection

@section('script')
<script>
    $('.home').addClass('active')
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
</script>
@endsection
@extends('layout.frontend')


@section('title', $country->title . ' | ' . $sitesetting->title)

@section('body')

<div class="page-title-area">
    <div class="container">
      <div class="page-title-content">
        <h2>{{ $country->title }}</h2>
      </div>
    </div>
    <div class="shape9"><img src="{{ asset('assets/images/shape8.svg') }}" alt="image" /></div>
</div>

<div class="about-area-two ptb-100">
    <div class="container">
        <p> {!! $country->description !!} </p>
    </div>
    <div class="shape3"><img src="{{ asset('assets/images/shape3.png') }}" alt="image" /></div>
    <div class="shape4"><img src="{{ asset('assets/images/shape4.png') }}" alt="image" /></div>
    <div class="shape2"><img src="{{ asset('assets/images/shape2.png') }}" alt="image" /></div>
</div>

@endsection

@section('script')
    <script>
        $('.country').addClass('active')
    </script>
@endsection
@extends('layout.frontend')


@section('title', $course->title . ' | ' . $sitesetting->title)

@section('body')
<div class="page-title-area">
    <div class="container">
      <div class="page-title-content">
        <h2>{{ $course->title }}</h2>
      </div>
    </div>
    <div class="shape9"><img src="{{ asset('assets/images/shape8.svg') }}" alt="image" /></div>
</div>

<div class="about-area-two ptb-100">
    <div class="container">
        <p> {!! $course->description !!} </p>
    </div>
    <div class="shape3"><img src="{{ asset('assets/images/shape3.png') }}" alt="image" /></div>
    <div class="shape4"><img src="{{ asset('assets/images/shape4.png') }}" alt="image" /></div>
    <div class="shape2"><img src="{{ asset('assets/images/shape2.png') }}" alt="image" /></div>
</div>
@endsection

@section('script')
    <style>
        h3 {
            color:#FE4A55
        }
    </style>
    <script>
        $('.course').addClass('active')
    </script>
@endsection
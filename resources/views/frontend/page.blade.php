@extends('layout.frontend')


@section('title', $page->title . ' | ' . $sitesetting->title)

@section('body')
<div class="page-title-area">
    <div class="container">
      <div class="page-title-content">
        <h2>{{ $page->title }}</h2>
      </div>
    </div>
</div>

<div class="about-area-two ptb-100">
    <div class="container">
        <center><img src="{{ asset('images/'.$page->image) }}" style="max-height: 500px; max-width:100%;" alt=""></center>
        <br>
        <p> {!! $page->content !!} </p>
    </div>
</div>
@endsection

@section('script')
    <style>
        h3 {
            color:#FE4A55
        }
    </style>
    @if($page->banner)
    <style>
      .page-title-area {
        background: url({{ asset('images/'. $page->banner) }});
        background-repeat: no-repeat;
        background-position: center center;
      }
      .page-title-area h2 {
        color: white !important;
      }
    </style>
  @endif
    <script>
        @if($page->subof == 1)
          $('.home').addClass('active')
        @elseif($page->subof == 2)
          $('.about').addClass('active')
        @elseif($page->subof == 3)
          $('.courses').addClass('active')
        @else
          $('.countries').addClass('active')
        @endif
    </script>
@endsection
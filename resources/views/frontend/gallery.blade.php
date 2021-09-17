@extends('layout.frontend')


@section('title', 'Gallery | ' . $sitesetting->title)

@section('body')
<div class="gallery-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            @foreach($galleries as $gallery)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-gallery-item">
                    <a class="popup-btn" href="#popup"><img src="images/{{ $gallery->image }}" alt="{{ $gallery->title }}"/></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection


@section('script')
    <style>
        h3 {
            color:#FE4A55
        }
    </style>
    <script>
        $('.gallery').addClass('active')
    </script>
@endsection
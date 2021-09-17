@extends('layout.frontend')

@section('title','Error | KLC Education Consultancy')

@section('body')
    <div class="mydiv">
        <img src="/assets/images/404.png" alt="">
    </div>
@endsection

@section('script')
    <style>
        .mydiv {
            height:calc(100vh - 80px);
            width: 100%;
        }
    </style>
    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
    </script>
@endsection
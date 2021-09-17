@extends('layout.frontend')


@section('title', 'Teams & Conditions | ' . $sitesetting->title)

@section('body')
<div class="terms-of-service-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="terms-of-service-content">
                    {!! $data !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
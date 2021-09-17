@extends('layout.admin')
@section('title','Admin Dashboard')

@section('content')


<div class="container">
    <div class="card card-body shadow-lg">
        <h5>Welcome to KLC Education Consultancy Admin Dashboard!!</h5>
        <div class="spacer"></div>
        <div class="spacer"></div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('site-setting.index') }}" class="btn btn-primary">Edit Site Settings</a>
            </div>
        </div>
    </div>
</div>
<div style="padding: 40px">
    <div class="row">
        <div class="col-md-4">
            <div style="background:#FFF3CD;color:#856404;font-size:20px;padding:20px;font-weight:600">
                Talk To Our Support <br>
                +977 9851199432 / 980119432
            </div>
        </div>
        <div class="col-md-4">
            <div style="background:#D4EDDA;color:#155724;font-size:20px;padding:20px;font-weight:600">
                Contact Via Email <br>
                <a href="mailto:info@paradiseit.com.np">info@paradiseit.com.np</a>
            </div>
        </div>
        <div class="col-md-4">
            <div style="background:#D1ECF1;color:#0C75AB;font-size:20px;padding:20px;font-weight:600">
                Expertise Team Our Expert and Professional team is delighted to our customer.
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('#dashboard').addClass('active')
</script>
@endsection
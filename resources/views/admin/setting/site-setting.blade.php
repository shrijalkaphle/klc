@extends('layout.admin')
@section('title','Site Setting')

@section('content')
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="text-transform: capitalize">
                <strong> <span class="material-icons-outlined"> check_circle </span> </strong>
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="{{ route('site-setting.update',$sitesetting->id) }}" enctype="multipart/form-data" method="post">
            @csrf
          	@method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <h3>Site Details</h3>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="title">Site Title<small>(Required)</small></label>
                        <input type="text" name="title" id="title" value="{{ $sitesetting->title }}" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="description">Site Description<small>(Required)</small></label>
                        <input type="text" name="description" id="description" value="{{ $sitesetting->description }}" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="keyword">Site Keyword <small>(Required)</small></label>
                        <input type="text" name="keyword" id="keyword" value="{{ $sitesetting->keyword  }}" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="address">Site Address<small>(Required)</small></label>
                        <input type="text" name="address" id="address" value="{{ $sitesetting->address  }}" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="phone">Site Phone<small>(Required)</small></label>
                        <input type="text" name="phone" id="phone" value="{{ $sitesetting->phone }}" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="email">Site Email<small>(Required)</small></label>
                        <input type="email" name="email" id="email" value="{{ $sitesetting->email }}" class="form-control" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="timing">Timing<small>(Required)</small></label>
                        <input type="text" name="timing" id="timing" value="{{ $sitesetting->timing }}" class="form-control" required autocomplete="off">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <h3>Site Images</h3>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="logo">Site Logo<small>(Required)</small></label>
                        <input type="file" name="logo" id="logo" class="form-control">
                    </div>
                    <img src="@if($sitesetting->logo) {{ asset('images/'.$sitesetting->logo) }} @endif" style="max-height:150px">
                    <hr>
                    <div class="form-group">
                        <label for="favicon">Site Favicon<small>(Required)</small></label>
                        <input type="file" name="favicon" id="favicon" class="form-control">
                    </div>
                    <img src="@if($sitesetting->favicon) {{ asset('images/'.$sitesetting->favicon) }} @endif" style="max-height:150px">
                </div>
            </div>
            <hr>
          	<div class="row">
                <div class="col-md-4">
                    <h3>Footer Setting</h3>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="footer-about">Footer Text</label>
                        <textarea name="footertext" class="form-control" cols="30" rows="10">{{ $sitesetting->footertext }}</textarea>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="facebook">Facebook(only username)</label>
                            <input type="text" name="facebook" id="facebook" class="form-control" value="{{ $sitesetting->facebook }}">
                        </div>
                        <div class="col-md-6">
                            <label for="twitter">Twitter(only username)</label>
                            <input type="text" name="twitter" id="twitter" class="form-control" value="{{ $sitesetting->twitter }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="linkedin">Linkedin(only username)</label>
                            <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ $sitesetting->linkedin }}">
                        </div>
                        <div class="col-md-6">
                            <label for="instagram">Instagram(only username)</label>
                            <input type="text" name="instagram" id="instagram" class="form-control" value="{{ $sitesetting->instagram }}">
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
          	<hr>
          	<div class="row">
                <div class="col-md-4">
                    <h3>Map iFrame</h3>
                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="iframe">Map iFrame(only src='..')<small>(Required)</small></label>
                      	<textarea name="iframe" class="form-control" cols="30" rows="10">{{ $sitesetting->iframe }}</textarea>
                    </div>
                </div>
          	</div>
          	<div class="spacer-2x"></div>
          	<center> <button class="btn cstmbtn btn-primary">Update</button> </center>
    	</form>
	</div>
@endsection

@section('script')
<style>
    .spacer {
        height:30px
    }
    .card {
        widtH: 80%;
        margin: auto
    }
    .form-group {
        margin-bottom: 10px
    }
</style>
<script>
    $('#sitesetting').addClass('active')
</script>
@endsection
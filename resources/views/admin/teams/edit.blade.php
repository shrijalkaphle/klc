@extends('layout.admin')
@section('title','Edit Team | '.$team->name)

@section('content')
<div class="container">
    <div class="card shadow-lg">
        <form action="{{ route('teams.update',$team->id) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name<span class="required">*</span></label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$team->name}}" required autocomplete="off">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="position">Position<span class="required">*</span></label>
                        <input type="text" name="position" id="position" class="form-control" value="{{$team->position}}" required autocomplete="off">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image">Image<span class="required">*</span></label>
                        <input type="file" name="image" id="image" class="form-control" onchange="loadFile(event)">
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="@if($team->image) /images/{{$team->image}} @endif" id="preview" style="max-height:200px" alt="">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="facebook">Facebook(only username)</label>
                    <input type="text" name="facebook" id="facebook" value="{{$team->facebook}}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="twitter">Twitter(only username)</label>
                    <input type="text" name="twitter" id="twitter" value="{{$team->twitter}}" class="form-control">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="linkedin">Linkedin(only username)</label>
                    <input type="text" name="linkedin" id="linkedin" value="{{$team->linkedin}}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="instagram">Instagram(only username)</label>
                    <input type="text" name="instagram" id="instagram" value="{{$team->instagram}}" class="form-control">
                </div>
            </div>
            <br><br>
            <center>
                <button class="btn btn-primary">Update</button>
            </center>
        </form>
    </div>
</div>
@endsection

@section('script')
    <script>
        $('#team').addClass('active')
    </script>
@endsection
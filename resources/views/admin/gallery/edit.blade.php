@extends('layout.admin')
@section('title','Edit Gallery')

@section('content')
<div class="container">
    <div class="card shadow-lg">
        <form action="{{ route('galleries.update',$gallery->id) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title<span class="required">*</span></label>
                <input type="text" name="title" id="title" value="{{ $gallery->title }}" class="form-control" required autocomplete="off">
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
                    <img src="@if($gallery->image) {{asset('images/'.$gallery->image)}} @endif" id="preview" style="max-height:200px" alt="">
                </div>
            </div>
            <br>
            <center>
                <button class="btn btn-primary">Update</button>
            </center>
        </form>
    </div>
</div>
@endsection

@section('script')
    <script>
        $('#gallery').addClass('active')
    </script>
@endsection
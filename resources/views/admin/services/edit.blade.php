@extends('layout.admin')
@section('title','Edit Services | '.$service->title)

@section('content')
<div class="container">
    <div class="card shadow-lg">
        <form action="{{ route('services.update',$service->id) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title<span class="required">*</span></label>
                <input type="text" name="title" id="title" value="{{ $service->title }}" class="form-control" required autocomplete="off">
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
                    <img src="@if($service->image) {{asset('images/'.$service->image)}} @endif" id="preview" style="max-height:200px" alt="">
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="description">Description<span class="required">*</span></label>
                <textarea name="description" id="description" cols="30" class="form-control" rows="10">{{ $service->description }}</textarea>
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
        $('#services').addClass('active')
    </script>
@endsection
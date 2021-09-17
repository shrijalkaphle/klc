@extends('layout.admin')
@section('title','Blogs')

@section('content')

    <div class="container">
        <div class="card shadow-lg">
            <form action="{{ route('blogs.update',$blog->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Blog Title<span class="required">*</span></label>
                            <input type="text" name="title" id="title" value="{{ $blog->title }}" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="author">Blog Author<span class="required">*</span></label>
                            <input type="text" name="author" value="{{ $blog->author }}" id="author" class="form-control" required autocomplete="off">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cover">Blog Cover Image<span class="required">*</span></label>
                            <input type="file" name="cover" id="cover" class="form-control" onchange="loadFile(event)">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="@if($blog->cover) {{asset('images/'.$blog->cover)}} @endif" id="preview" style="max-height:200px" alt="">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="body">Blog Post<span class="required">*</span></label>
                    <textarea name="body" id="body" cols="30" class="form-control" rows="10">{{ $blog->body }}</textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="tag">Blog Tags<span class="required">*</span></label>
                    <input type="text" name="tag" id="tag" value="{{ $blog->tag }}" class="form-control" required autocomplete="off">
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
        $('#blogs').addClass('active')

        ClassicEditor.create( document.querySelector( '#body' ), {
            extraPlugins: [ SimpleUploadAdapterPlugin ]
        } ).catch( error => {
            console.error( error );
        } );
    </script>
@endsection
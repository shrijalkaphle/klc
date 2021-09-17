@extends('layout.admin')
@section('title','Edit Page | '. $page->title)

@section('content')
    <div class="container">
        <div class="card-body shadow-lg">
            <form action="{{ route('pages.update',$page->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col-md-2" style="text-align:right">
                        <label for="title">Page Title<span class="required">*</span> </label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="title" id="title" placeholder="Page Title" value="{{ $page->title }}" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2" style="text-align:right">
                        <label for="subof">Subgroup of<span class="required">*</span> </label>
                    </div>
                    <div class="col-md-6">
                        <select name="subof" id="subof" class="form-control" required>
                            @foreach ($mainpages as $p)
                                <option value="{{ $p->id }}" @if($p->id == $page->subof) selected @endif>{{ $p->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2" style="text-align:right">
                        <label for="link">Page Link<span class="required">*</span> </label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="link" id="link" value="{{$page->link}}" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2" style="text-align:right">
                        <label for="subof">Footer Link<span class="required">*</span> </label>
                    </div>
                    <div class="col-md-6">
                        <input type="checkbox" id="footer" name="footer" value="1" @if($page->footer) checked @endif>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2" style="text-align:right">
                        <label for="subof">Header Link<span class="required">*</span> </label>
                    </div>
                    <div class="col-md-6">
                        <input type="checkbox" id="status" name="status" value="1"  @if($page->status) checked @endif>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2" style="text-align:right">
                        <label for="banner">Banner</label>
                    </div>
                    <div class="col-md-6">
                        <input type="file" name="banner" id="banner" onchange="loadBanner(event)" class="form-control">
                        <img src="@if($page->banner) {{ asset('images/'.$page->banner) }} @endif" id="preview_banner" style="max-height: 200px;margin-top: 10px">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2" style="text-align:right">
                        <label for="image">Image<span class="required">*</span> </label>
                    </div>
                    <div class="col-md-6">
                        <input type="file" name="image" id="image" onchange="loadFile(event)" class="form-control">
                        <img src="@if($page->image) {{ asset('images/'.$page->image) }} @endif" id="preview" style="max-height: 200px;margin-top: 10px">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2" style="text-align:right">
                        <label for="content">Page Content<span class="required">*</span></label>
                    </div>
                    <div class="col-md-10">
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ $page->content }}</textarea>
                    </div>
                </div>
                <center>
                    <button type="submit" class="btn cstmbtn btn-primary">Update</button>
                </center>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <style>
        .form-group {
            margin-bottom: 15px
        }
        .form-group label {
            padding-top:7px;
        }
        .required {
            color: red
        }
    </style>
    <script>
        $('#pagesetting').addClass('active')
        ClassicEditor.create( document.querySelector( '#content' ), {
            extraPlugins: [ SimpleUploadAdapterPlugin ]
        } ).catch( error => {
            console.error( error );
        } );

        var loadFile = function(event) {
            var output = document.getElementById('preview');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
        var loadBanner = function(event) {
            var output = document.getElementById('preview_banner');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endsection
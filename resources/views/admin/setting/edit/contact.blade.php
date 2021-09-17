@extends('layout.admin')
@section('title','Edit Contact Page')

@section('content')
    <div class="container">
        <div class="card-body shadow-lg">
            <form action="{{ route('contactpage.update', $contactpage->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="image">Banner<span class="required">*</span> </label>
                    <input type="file" name="banner" id="banner" onchange="loadFile(event)" class="form-control">
                </div>
                
                <img src="@if($contactpage->banner) {{ asset('images/'.$contactpage->banner) }} @endif" id="preview" style="max-height: 200px;margin-top: 10px">
                
                <div class="form-group">
                    <label for="content">Map Iframe<span class="required">*</span></label>
                    <input type="text" name="iframe" id="iframe" value="{{ $contactpage->iframe }}" class="form-control" required>
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
            extraPlugins: [ SimpleUploadAdapterPlugin ],
            heading: {
                options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
            }
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
    </script>
@endsection
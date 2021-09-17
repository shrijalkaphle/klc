@extends('layout.admin')
@section('title','Edit Index Page')

@section('content')
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="text-transform: capitalize">
                <strong> <span class="material-icons-outlined"> check_circle </span> </strong>
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card-body shadow-lg">
            <form action="{{ route('homepage.update', $homepage->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="image">Image<span class="required">*</span> </label>
                    <input type="file" name="image" id="image" onchange="loadFile(event)" class="form-control">
                </div>
                
                <img src="@if($homepage->image) {{ asset('images/'.$homepage->image) }} @endif" id="preview" style="max-height:200px;margin-top:10px;margin-bottom:10px">
                
                <div class="form-group">
                    <label for="content">Page Content<span class="required">*</span></label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ $homepage->content }}</textarea>
                </div>
                <hr>
                <h5>Courses Field</h5>
                <div class="row form-group">
                    <div class="col md-6">
                        <label for="coursetitle">Title<span class="required">*</span></label>
                        <input type="text" name="coursetitle" value="{{ $homepage->coursetitle }}" class="form-control" required>
                    </div>
                    <div class="col md-6">
                        <label for="coursesubtitle">Sub Title<span class="required">*</span></label>
                        <input type="text" name="coursesubtitle" value="{{ $homepage->coursesubtitle }}" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="coursedescription">Description<span class="required">*</span></label>
                    <textarea name="coursedescription" id="coursedescription" cols="30" rows="10" class="form-control" required>{{ $homepage->coursedescription }}</textarea>
                </div>
                <div class="form-group">
                    <label for="courseimage">Image<span class="required">*</span> </label>
                    <input type="file" name="courseimage" id="courseimage" onchange="loadImage(event)" class="form-control">
                </div>
                
                <img src="@if($homepage->courseimage) {{ asset('images/'.$homepage->courseimage) }} @endif" id="course_preview" style="max-height:200px;margin-top:10px;margin-bottom:10px">
                
                <div class="form-group">
                    <label for="feature">Feature List<span class="required">*</span></label>
                    <div class="row">
                        <div class="col md-3">
                            <input type="text" name="feature1" id="feature1" value="{{ $homepage->feature1 }}" class="form-control" required>
                        </div>
                        <div class="col md-3">
                            <input type="text" name="feature2" id="feature2" value="{{ $homepage->feature2 }}" class="form-control" required>
                        </div>
                        <div class="col md-3">
                            <input type="text" name="feature3" id="feature3" value="{{ $homepage->feature3 }}" class="form-control" required>
                        </div>
                        <div class="col md-3">
                            <input type="text" name="feature4" id="feature4" value="{{ $homepage->feature4 }}" class="form-control" required>
                        </div>
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
        .headingText {
            font-size: 22px;
            font-weight: 700
        }
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
        var loadImage = function(event) {
            var output = document.getElementById('course_preview');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endsection


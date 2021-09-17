@extends('layout.admin')
@section('title','Edit About Page')

@section('content')
    <div class="container">
        <div class="card-body shadow-lg">
            <form action="{{ route('aboutpage.update', $aboutpage->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="image">Image<span class="required">*</span> </label>
                    <input type="file" name="image" id="image" onchange="loadFile(event)" class="form-control">
                </div>
                
                <img src="@if($aboutpage->image) {{ asset('images/'.$aboutpage->image) }} @endif" id="preview" style="max-height: 200px;margin-top: 10px">
                
                <div class="form-group">
                    <label for="content">Page Content<span class="required">*</span></label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ $aboutpage->content }}</textarea>
                </div>
                <hr>
                <h4>Facts</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="factfield1" value="{{ $aboutpage->factfield1 }}" placeholder="Field 1">
                            <br>
                            <input type="text" class="form-control" name="factfield1_value" value="{{ $aboutpage->factfield1_value }}" placeholder="Data">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="factfield2" value="{{ $aboutpage->factfield2 }}" placeholder="Field 2">
                            <br>
                            <input type="text" class="form-control" name="factfield2_value" value="{{ $aboutpage->factfield2_value }}" placeholder="Data">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="factfield3" value="{{ $aboutpage->factfield3 }}" placeholder="Field 3">
                            <br>
                            <input type="text" class="form-control" name="factfield3_value" value="{{ $aboutpage->factfield3_value }}" placeholder="Data">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="factfield4" value="{{ $aboutpage->factfield4 }}" placeholder="Field 4">
                            <br>
                            <input type="text" class="form-control" name="factfield4_value" value="{{ $aboutpage->factfield4_value }}" placeholder="Data">
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
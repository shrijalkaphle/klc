@extends('layout.admin')
@section('title','Layout Page')

@section('content')
    <div class="container-fluid content-fluid">
        <form action="{{ route('text.update')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="hidden" name="block_position" id="blockposition" value="{{$text->block_position}}">
            <input type="hidden" name="id" id="textid" value="{{$text->id}}">
            <input type="hidden" name="page" value="{{$text->page}}">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$text->title}}" required>
            </div>
             <div class="form-group">
                <label for="subtitle">Sub Title</label>
                <input type="text" class="form-control" name="subtitle" id="subtitle" value="{{$text->subtitle}}">
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" onchange="loadImage(event)">
                </div>
                <div class="col-md-6">
                    <img src="/images/{{$text->image}}" id="preview" style="max-height: 150px">
                </div>
            </div>
            <div class="form-group">
                <label for="imageposition">Image Position</label>
                <select name="imageposition" id="imageposition" class="form-control">
                    <option value="right">Right</option>
                    <option value="left" @if($text->image_position == 'left') selected @endif>Left</option>
                </select>
            </div>
             <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="textcontent" cols="30" rows="10" class="form-control">{{$text->content}}</textarea>
            </div>
            <center>
                <input type="submit" value="Update" class="btn btn-primary">
            </center>
        </form>
    </div>
@endsection
@section('script')

<div class="modal fade" id="text" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Text Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('fact.update')}}" method="POST">
                <div class="modal-body facts-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <style>
        .content-fluid {
            width: 90%;
        }
        .draggable{
            padding: 20px;
            margin-bottom: 15px;
            cursor: move
        }
        .card-header {
            background: transparent
        }
        .card {
            border-radius: 0;
            border: 0
        }
        .draggable.dragging {
            opacity: 0.5;
        }
        .block-div {
            background: #F5F5F5;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #DDDDDD;

        }
    </style>
    <script>
        $('#layoutupdate').addClass('active')
        ClassicEditor.create( document.querySelector( '#textcontent' ), {
            extraPlugins: [ SimpleUploadAdapterPlugin ]
        } ).catch( error => {
            console.error( error );
        } );
        var loadImage = function(event) {
            var output = document.getElementById('preview');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endsection
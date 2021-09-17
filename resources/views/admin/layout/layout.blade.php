@extends('layout.admin')
@section('title','Layout Page')

@section('content')
    <div class="container-fluid content-fluid">
        <input type="hidden" name="page" id="page" value="{{ $page }}">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="card-header">
                        Template Blocks
                    </div>
                    <div class="card-body">
                        @foreach ($blocks as $block)
                            <div class="block-div">
                                <div class="row">
                                    <div class="col"> {{$block->title}} </div>
                                    <div class="col" style="text-align: right">
                                        <span class="material-icons-outlined" style="cursor: pointer" onclick="addBlock({{$block->id}})"> add_circle_outline </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body shadow-lg draggable-container">
                    @foreach($layout as $l)
                    <div class="layout-div shadow draggable" id="{{ $l->id }}" draggable="true" touchable="true" style="text-transform: capitalize">
                        <div class="row">
                            <div class="col"> {{$l->title}} </div>
                            <div class="col" style="text-align: right">
                                @if($l->title == 'text' || $l->title == 'facts' || $l->title == 'header' || $l->title == 'about' )
                                    @if($l->title == 'text')
                                        <span class="material-icons-outlined" style="cursor: pointer" onclick="redirect({{$l->id}})"> build </span>
                                    @elseif($l->title == 'facts')
                                        <span class="material-icons-outlined" style="cursor: pointer" onclick="redirectfact()"> build </span>
                                    @else
                                        <span class="material-icons-outlined" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#{{$l->title}}"> build </span>
                                    @endif
                                @endif
                                @if($l->title == 'header' || $l->title == 'about')
                                @else
                                <span class="material-icons-outlined" style="cursor: pointer;color:red" onclick="deleteBlock({{$l->id}},'{{$l->title}}')"> delete </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

@if($content != null)
<div class="modal fade" id="header" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Header Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/updateheader" enctype="multipart/form-data" method="post">
                <div class="modal-body header-body">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$content->title}}" required>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" name="image" onchange="loadImage(event)">
                        </div>
                        <div class="col-md-6">
                            <img src="@if($content->image) {{ asset('images/'.$content->image) }} @endif" id="header_preview" style="max-height: 150px">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="headercontent" cols="30" rows="10">{{$content->content}}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="about" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">About Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/updateabout" enctype="multipart/form-data" method="post">
                <div class="modal-body header-body">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$content->title}}" required>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" name="image" onchange="loadImage(event)">
                        </div>
                        <div class="col-md-6">
                            <img src="@if($content->image) {{ asset('images/'.$content->image) }} @endif" id="header_preview" style="max-height: 150px">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="aboutcontent" cols="30" rows="10">{{$content->content}}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endif

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
        ClassicEditor.create( document.querySelector( '#headercontent' ), {
            extraPlugins: [ SimpleUploadAdapterPlugin ]
        } ).catch( error => {
            console.error( error );
        } );
        ClassicEditor.create( document.querySelector( '#aboutcontent' ), {
            extraPlugins: [ SimpleUploadAdapterPlugin ]
        } ).catch( error => {
            console.error( error );
        } );
        var loadImage = function(event) {
            var output = document.getElementById('header_preview');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
        var loadTextImage = function(event) {
            var output = document.getElementById('text_preview');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
        $('.draggable-container').sortable({
            delay: 150,
            stop:function() {
                var seletedData = new Array();
                $('.draggable-container>div').each(function() {
                    seletedData.push($(this).attr('id'))
                })
                updateOrder(seletedData)
            }
        })
        function updateOrder(data) {
            var page = $('#page').val()
            _token = '{{ csrf_token() }}'
            $('#loading').removeClass('hidden');
            $.ajax({
                url: '/layout/updatelayout',
                type: 'POST',
                data: { allData: data, page: page, _token:_token },
                success: function(res) { },
                complete: function(){
                    $('#loading').addClass('hidden');
                }
            })
        }
        
        function addBlock(id) {
            var page = $('#page').val()
            _token = '{{ csrf_token() }}'
            $.ajax({
                url: '/layout/addblock',
                type: 'POST',
                data: { id: id, page: page, _token:_token },
                success: function(res) {
                    html = ''
                    $.each(res.data, function(index,data){
                        html = html + '<div class="layout-div shadow draggable" id="'+data.id+'" draggable="true" touchable="true" style="text-transform: capitalize"><div class="row"><div class="col">'+data.title+'</div>'
                        html = html + '<div class="col" style="text-align: right">'
                        if(data.title == 'facts' || data.title == 'header') {
                            html = html + '<span class="material-icons-outlined" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#'+data.title+'"> build </span>'
                        }
                        if(data.title == 'text') {
                            html = html + '<span class="material-icons-outlined text-edit" style="cursor: pointer" onclick="redirect('+data.id+')"> build </span>'
                        }
                        html = html + '<span class="material-icons-outlined" style="cursor: pointer;color:red" onclick="deleteBlock('+data.id+')"> delete </span></div></div></div>'
                    })
                    $('.draggable-container').html(html)
                },
                complete: function(){
                    $('#loading').addClass('hidden');
                }
            })
        }
        function redirect(id) {
            var page = $('#page').val()
            url = '/layout/text/'+page+'/'+id
            window.location.href = url
        }
        function redirectfact() {
            var page = $('#page').val()
            url = '/layout/fact/'+page
            window.location.href = url
        }
        function deleteBlock(id,title) {
            var page = $('#page').val()
            _token = '{{ csrf_token() }}'
            $.ajax({
                url: '/layout/deleteblock',
                type: 'POST',
                data: { id: id, page: page, _token:_token, title:title },
                success: function(res) {
                    html = ''
                    $.each(res.data, function(index,data){
                        html = html + '<div class="layout-div shadow draggable" id="'+data.id+'" draggable="true" touchable="true" style="text-transform: capitalize"><div class="row"><div class="col">'+data.title+'</div>'
                        html = html + '<div class="col" style="text-align: right">'
                        if(data.title == 'facts' || data.title == 'header' || data.title == 'about') {
                            html = html + '<span class="material-icons-outlined" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#'+data.title+'"> build </span>'
                        }
                        if(data.title == 'text') {
                            html = html + '<span class="material-icons-outlined text-edit" style="cursor: pointer" onclick="redirect('+data.id+')"> build </span>'
                        }
                        if(data.title != 'header' || data.title != 'about')
                            html = html + '<span class="material-icons-outlined" style="cursor: pointer;color:red" onclick="deleteBlock('+data.id+')"> delete </span></div></div></div>'
                    })
                    $('.draggable-container').html(html)
                },
                complete: function(){
                    $('#loading').addClass('hidden');
                }
            })
        }
    </script>
@endsection

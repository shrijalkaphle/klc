@extends('layout.admin')
@section('title','Services')

@section('content')
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="text-transform: capitalize">
                <strong> <span class="material-icons-outlined"> check_circle </span> </strong>
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-transform: capitalize">
                <strong> <span class="material-icons-outlined"> error </span> </strong>
                {{ Session::get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div style="width:100%;height:50px">
            <button class="btn cstmbtn btn-primary" style="float:right" id="addImage">
                <span class="material-icons-outlined"> add </span>
                Add New Photo
            </button>
        </div>
        <div class="card shadow-lg">
            <div id="show">
                <table class="table">
                    <thead>
                        <th>Title</th>
                        <th>Image</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($galleries as $gallery)
                        <tr>
                            <td> {{ $gallery->title }} </td>
                            <td> <img src="images/{{ $gallery->image }}" style="height:120px"> </td>
                            <td style="text-align: right">
                                <form action="{{ route('galleries.edit', $gallery->id) }}" style="display:inline-block">
                                    <button class="action" type="submit"><span class="material-icons-outlined"> edit </span></button>
                                </form>
                                <form action="{{ route('galleries.destroy', $gallery->id) }}" method="post" id="delete-{{$gallery->id}}" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="action delete-model" type="button" data-id="{{$gallery->id}}" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal"><span class="material-icons-outlined"> delete </span></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div style="display:none" id="add">
                <form action="{{ route('galleries.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title<span class="required">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" required autocomplete="off">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cover">Image<span class="required">*</span></label>
                                <input type="file" name="image" id="image" class="form-control" onchange="loadFile(event)" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="" id="preview" style="max-height:200px" alt="">
                        </div>
                    </div>
                    <br>
                    <center>
                        <button class="btn cstmbtn btn-primary">Save</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')

{{-- delete model --}}
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">
                    <span style="color:red"><i class="fas fa-info-circle"></i></span>
                    Confirm Delete
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="galleryid" id="galleryid">
                Are You Sure Want to Delete?
            </div>
            <div class="modal-footer">
                <button type="sumbit" class="btn btn-danger" id="confirmDelete">Confirm</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<style>
    .required {
        color: red
    }
</style>

<script>
    $('#gallery').addClass('active')

    $('.delete-model').on('click', function() {
        $('.modal-body #galleryid').val($(this).data('id'))
    })

    $('#confirmDelete').on('click', function() {
        var id = $('.modal-body #galleryid').val()
        $('#delete-'+id).submit()
    })
    $('#addImage').on('click', function() {
        $('#show').hide()
        $('#add').show()
        $('#addImage').hide()
    })
    var loadFile = function(event) {
            var output = document.getElementById('preview');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    
</script>
    
@endsection
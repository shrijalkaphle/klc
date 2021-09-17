@extends('layout.admin')
@section('title','Testimonial')

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
            <button class="btn cstmbtn btn-primary" style="float:right" id="addTestimonial">
                <span class="material-icons-outlined"> add </span>
                Add New Testimonial
            </button>
        </div>
        <div class="card shadow-lg">
            <div id="show">
                <table class="table">
                    <thead>
                        <th></th>
                        <th>Name</th>
                        <th>Status</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($testimonials as $testimonial)
                        <tr>
                            <td> <img src="" alt=""> </td>
                            <td> {{ $testimonial->name }} </td>
                            <td> {{ $testimonial->status }} </td>
                            <td style="text-align: right">
                                <form action="{{ route('testimonial.edit', $testimonial->id) }}" style="display:inline-block">
                                    <button class="action" type="submit"><span class="material-icons-outlined"> edit </span></button>
                                </form>
                                <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="post" id="delete-{{$testimonial->id}}" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="action delete-model" type="button" data-id="{{$testimonial->id}}" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal"><span class="material-icons-outlined"> delete </span></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div style="display:none" id="add">
                <form action="{{ route('testimonial.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name <small>(Required)</small></label>
                                <input type="text" name="name" id="name" class="form-control" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Education Status <small>(Required)</small></label>
                                <input type="text" name="status" id="status" class="form-control" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="spacer-2x"></div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="image">Image <small>(Required)</small></label>
                            <input type="file" name="photo" id="photo" class="form-control" onchange="loadImage(event)" required>
                        </div>
                        <div class="col-md-6">
                            <img src="" style="max-height:150px" id="preview">
                        </div>
                    </div>
                    <div class="spacer-2x"></div>
                    <div class="form-group">
                        <label for="body">Testimonial <small>(Required)</small></label>
                        <textarea name="comments" id="comments" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="spacer-2x"></div>
                    <center>
                        <button class="btn cstmbtn btn-primary">Post</button>
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
                <input type="hidden" name="testimonialid" id="testimonialid">
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
    textarea {
        width: 100%;
        border-radius: 10px;
    }
</style>

<script>
    $('#testimonial').addClass('active')

    $('.delete-model').on('click', function() {
        $('.modal-body #testimonialid').val($(this).data('id'))
    })

    $('#confirmDelete').on('click', function() {
        var id = $('.modal-body #testimonialid').val()
        $('#delete-'+id).submit()
    })
    $('#addTestimonial').on('click', function() {
        $('#show').hide()
        $('#add').show()
        $('#addTestimonial').hide()
    })
    var loadImage = function(event) {
            var output = document.getElementById('preview');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    
</script>
    
@endsection
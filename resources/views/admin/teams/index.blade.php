@extends('layout.admin')
@section('title','Blogs')

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
            <button class="btn cstmbtn btn-primary" style="float:right" id="addTeam">
                <span class="material-icons-outlined"> add </span>
                Add New Team
            </button>
        </div>
        <div class="card shadow-lg">
            <div id="show">
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Image</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($teams as $team)
                        <tr>
                            <td> {{ $team->name }} </td>
                            <td> {{ $team->position }} </td>
                            <td> <img src="images/{{ $team->image }}" style="height:120px"> </td>
                            <td style="text-align: right">
                                <form action="{{ route('teams.edit', $team->id) }}" style="display:inline-block">
                                    <button class="action" type="submit"><span class="material-icons-outlined"> edit </span></button>
                                </form>
                                <form action="{{ route('teams.destroy', $team->id) }}" method="post" id="delete-{{$team->id}}" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="action delete-model" type="button" data-id="{{$team->id}}" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal"><span class="material-icons-outlined"> delete </span></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div style="display:none" id="add">
                <form action="{{ route('teams.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name<span class="required">*</span></label>
                                <input type="text" name="name" id="name" class="form-control" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="position">Position<span class="required">*</span></label>
                                <input type="text" name="position" id="position" class="form-control" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image">Image<span class="required">*</span></label>
                                <input type="file" name="image" id="image" class="form-control" onchange="loadFile(event)" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <img src="" id="preview" style="max-height:200px" alt="">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="facebook">Facebook(only username)</label>
                            <input type="text" name="facebook" id="facebook" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="twitter">Twitter(only username)</label>
                            <input type="text" name="twitter" id="twitter" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="linkedin">Linkedin(only username)</label>
                            <input type="text" name="linkedin" id="linkedin" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="instagram">Instagram(only username)</label>
                            <input type="text" name="instagram" id="instagram" class="form-control">
                        </div>
                    </div>
                    <br><br>
                    <center>
                        <button class="btn cstmbtn btn-primary">Add</button>
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
                <input type="hidden" name="teamid" id="teamid">
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
    $('#team').addClass('active')

    
    ClassicEditor.create( document.querySelector( '#body' ), {
        extraPlugins: [ SimpleUploadAdapterPlugin ]
    } ).catch( error => {
        console.error( error );
    } );

    $('.delete-model').on('click', function() {
        $('.modal-body #teamid').val($(this).data('id'))
    })

    $('#confirmDelete').on('click', function() {
        var id = $('.modal-body #teamid').val()
        $('#delete-'+id).submit()
    })
    $('#addTeam').on('click', function() {
        $('#show').hide()
        $('#add').show()
        $('#addTeam').hide()
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
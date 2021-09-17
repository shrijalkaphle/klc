@extends('layout.admin')
@section('title','User List')

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
            <button class="btn cstmbtn btn-primary" style="float:right" id="addUser">
                <span class="material-icons-outlined"> add </span>
                Add New User
            </button>
        </div>
        <div class="row" id="show">
            @foreach($users as $user)
            <div class="col-md-4">
                <div class="card card-body">
                    <img src="{{ asset('assets/images/default-user.png') }}" class="rounded-circle" width="180px" alt="">
                    <br>
                    <h4>{{ $user->name }}</h4>
                    <h6>{{ $user->username }}</h6>
                    <h6>{{ $user->email }}</h6>
                    <br>
                    <small>Member Since: {{ date('M j, Y', strtotime($user->created_at)) }}</small>
                    <br>
                    <div>
                        <form action="{{ route('users.edit', $user->id) }}" style="display:inline-block">
                            <button class="action" type="submit"><span class="material-icons-outlined"> edit </span></button>
                        </form>
                        <form action="{{ route('users.destroy', $user->id) }}" method="post" id="delete-{{$user->id}}" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="action delete-model" type="button" data-id="{{$user->id}}" data-bs-toggle="modal"
                            data-bs-target="#deleteModal"><span class="material-icons-outlined"> delete </span></button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div style="display:none" class="card card-body shadow-lg" id="add">
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name<small>(Required)</small></label>
                    <input type="text" name="name" id="name" required class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="name">Username<small>(Required)</small></label>
                    <input type="text" name="username" id="username" required class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="email">Email<small>(Required)</small></label>
                    <input type="text" name="email" id="email" required class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password">Password<small>(Required)</small></label>
                    <input type="text" name="password" id="password" required class="form-control" autocomplete="off">
                </div>
                <div class="spacer-2x"></div>
                <center>
                    <button class="btn cstmbtn btn-primary">Add User</button>
                </center>
            </form>
        </div>
    </div>
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
                    <input type="hidden" name="userid" id="userid">
                    Are You Sure Want to Delete?
                </div>
                <div class="modal-footer">
                    <button type="sumbit" class="btn btn-danger" id="confirmDelete">Confirm</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<style>
    #show .card {
        background: whitesmoke;
        text-align: center;
    }
    #add{
        background: white;
        width: 70%;
        margin: auto
    }
    .card img {
        margin: auto
    }
    .form-group {
        margin-bottom: 10px
    }
</style>
<script>
    $('#user').addClass('active')
    $('#addUser').on('click', function() {
        $('#show').hide()
        $('#add').show()
        $('#addUser').hide()
    })
    $('.delete-model').on('click', function() {
        $('.modal-body #userid').val($(this).data('id'))
    })

    $('#confirmDelete').on('click', function() {
        var id = $('.modal-body #userid').val()
        $('#delete-'+id).submit()
    })
</script>
@endsection
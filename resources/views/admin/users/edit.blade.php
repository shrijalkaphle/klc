@extends('layout.admin')
@section('title','User List')

@section('content')
    <div class="container">
        <div class="card card-body shadow-lg">
            <form action="{{ route('users.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Full Name<small>(Required)</small></label>
                    <input type="text" name="name" id="name" required value="{{ $user->name }}" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="name">Username<small>(Required)</small></label>
                    <input type="text" name="username" id="username" value="{{ $user->username }}" required class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="email">Email<small>(Required)</small></label>
                    <input type="text" name="email" id="email" value="{{ $user->email }}" required class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password">Password<small>(Required)</small></label>
                    <input type="text" name="password" id="password" class="form-control" autocomplete="off">
                </div>
                <div class="spacer-2x"></div>
                <center>
                    <button class="btn cstmbtn btn-primary">Update User</button>
                </center>
            </form>
        </div>
    </div>
@endsection

@section('script')
<style>
    .card{
        background: white;
        width: 70%;
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
</script>
@endsection
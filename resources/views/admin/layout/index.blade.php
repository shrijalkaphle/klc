@extends('layout.admin')
@section('title','Layout Management')

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
        <div class="row">
            <div class="col">
            </div>
            <div class="col" style="text-align: right">
                <a class="btn cstmbtn btn-primary" style="float:right" href="{{ route('pages.create') }}">
                    <span class="material-icons-outlined"> add </span>
                    Create Page
                </a>
            </div>
        </div>
        <table class="table">
            <thead>
                <th>Title</th>
                <th></th>
            </thead>
            <tbody>

                <tr>
                    <td style="padding-top:15px"> Home </td>
                    <td style="text-align: right">
                        <a href="{{ route('layout.edit','home') }}"><button class="action">
                            <span class="material-icons-outlined"> build </span>
                        </button></a>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top:15px"> About </td>
                    <td style="text-align: right">
                        <a href="{{ route('layout.edit','about') }}"><button class="action">
                            <span class="material-icons-outlined"> build </span>
                        </button></a>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top:15px"> Page </td>
                    <td style="text-align: right">
                        <a href="{{ route('layout.edit','page') }}"><button class="action">
                            <span class="material-icons-outlined"> build </span>
                        </button></a>
                    </td>
                </tr>
            </tbody>
        </table>
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
                    <input type="hidden" name="pageid" id="pageid">
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
    .spacer {
        height:30px
    }
    .disable {
        padding: 10px;
        color: red;
        background: transparent;
        border: 0;
        border-radius: 20px;
    }
    .disable:hover {
        color: white;
        background: red;
        border: 0
    }
    .enable {
        padding: 10px;
        color: green;
        background: transparent;
        border: 0;
        border-radius: 20px;
    }
    .enable:hover {
        color: white;
        background: green;
        border: 0
    }
</style>
<script>
    $('#layoutupdate').addClass('active')
    $('.delete-model').on('click', function() {
        $('.modal-body #pageid').val($(this).data('id'))
    })
    $('#confirmDelete').on('click', function() {
        var id = $('.modal-body #pageid').val()
        $('#delete-'+id).submit()
    })
</script>
@endsection
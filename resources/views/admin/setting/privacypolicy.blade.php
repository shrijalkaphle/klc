@extends('layout.admin')
@section('title','Privacy Policy')

@section('content')
    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="text-transform: capitalize">
                <strong> <span class="material-icons-outlined"> check_circle </span> </strong>
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card shadow-lg">
            <form action="{{ route('privacypolicy.update', $sitesetting->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="privacypolicy">Privacy Policy<small>(Required)</small></label>
                    <textarea name="privacypolicy" id="privacypolicybody" cols="30" rows="10" class="form-control">{{ $sitesetting->privacypolicy }}</textarea>
                </div>
                <div class="spacer-2x"></div>
                <center>
                    <button class="btn cstmbtn btn-primary">Update</button>
                </center>
            </form>
        </div>
    </div>
@endsection

@section('script')
<style>
    .spacer {
        height:30px
    }
    .card {
        widtH: 80%;
        margin: auto
    }
    .form-group {
        margin-bottom: 10px
    }
</style>
<script>
    $('#privacypolicy').addClass('active')
    ClassicEditor.create( document.querySelector( '#privacypolicybody' )).catch( error => {
        console.error( error );
    } );
</script>
@endsection
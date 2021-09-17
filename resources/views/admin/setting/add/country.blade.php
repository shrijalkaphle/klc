@extends('layout.admin')
@section('title','Add Country')

@section('content')
    <div class="container">
        <div class="card card-body shadow-lg">
            <form action="{{ route('country.store') }}" method="post">
                @csrf
                <div class="form-input">
                    <input type="text" name="title" id="title" required autocomplete="off">
                    <label for="title" class="label-name">
                        <span class="content-name">Country Name<small>(Required)</small></span>
                    </label>
                </div>
                <div class="spacer"></div>
                <label for="description">Description<small>(Required)</small></label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                <div class="spacer"></div>
                <center>
                    <button class="btn cstmbtn btn-primary">Add</button>
                </center>
            </form>
        </div>
    </div>
@endsection

@section('script')
<style>
    .spacer {
        height: 30px;
    }
</style>
<script>
    $('#pagesetting').addClass('active')
    ClassicEditor.create( document.querySelector( '#description' )).catch( error => {
        console.error( error );
    } );
</script>
@endsection
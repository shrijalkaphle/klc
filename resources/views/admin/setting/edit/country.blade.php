@extends('layout.admin')
@section('title',$country->title . ' | Edit')

@section('content')
    <div class="container">
        <div class="card card-body shadow-lg">
            <form action="{{ route('country.update', $country->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-input">
                    <input type="text" name="title" id="title" value="{{ $country->title }}" required autocomplete="off">
                    <label for="title" class="label-name">
                        <span class="content-name">Country Name<small>(Required)</small></span>
                    </label>
                </div>
                <div class="spacer"></div>
                <label for="description">Description<small>(Required)</small></label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $country->description }}</textarea>
                <div class="spacer"></div>
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
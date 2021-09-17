@extends('layout.admin')
@section('title',$course->title .' | Edit')

@section('content')
    <div class="container">
        <div class="card card-body shadow-lg">
            <form action="{{ route('course.update', $course->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-input">
                    <input type="text" name="title" id="title" value="{{ $course->title }}" required autocomplete="off">
                    <label for="title" class="label-name">
                        <span class="content-name">Course Title<small>(Required)</small></span>
                    </label>
                </div>
                <div class="spacer"></div>
                <label for="description">Description<small>(Required)</small></label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $course->description }}</textarea>
                <div class="spacer"></div>
                <center>
                    <button class="btn cstmbtn btn-primary">Next</button>
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
@extends('layout.admin')
@section('title','Testimonial | Edit')

@section('content')

    <div class="container">
        <div class="card shadow-lg">
            <div>
                <form action="{{ route('testimonial.update',$testimonial->id) }}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name <small>(Required)</small></label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $testimonial->name }}"  required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Education Status <small>(Required)</small></label>
                                <input type="text" name="status" id="status" class="form-control" value="{{ $testimonial->status }}" required autocomplete="off">
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
                            <img src="images/{{ $testimonial->photo }}" style="max-height:150px" id="preview">
                        </div>
                    </div>
                    <div class="spacer-2x"></div>
                    <div class="form-group">
                        <label for="body">Testimonial <small>(Required)</small></label>
                        <textarea name="comments" id="comments" cols="30" rows="10" class="form-control">{{ $testimonial->comments }}</textarea>
                    </div>
                    <div class="spacer-2x"></div>
                    <center>
                        <button class="btn cstmbtn btn-primary">Update</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')

<style>
    textarea {
        width: 100%;
        border-radius: 10px;
    }
</style>

<script>
    $('#testimonial').addClass('active')
</script>
    
@endsection
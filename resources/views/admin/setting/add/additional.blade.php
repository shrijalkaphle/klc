@extends('layout.admin')
@section('title','Add Course | Additional')

@section('content')
    <div class="container">
        <div class="card card-body shadow-lg">
            <form action="{{ route('course.additional.store') }}" method="post">
                @csrf
                <input type="hidden" name="courseid" value="{{ $courseid }}">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-input">
                            <input type="text" name="title[]" id="title[]" required autocomplete="off">
                            <label for="title" class="label-name">
                                <span class="content-name">Course Title<small>(Required)</small></span>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="description">Description<small>(Required)</small></label>
                        <textarea name="description[]" id="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                <div id="add"></div>
                <div style="width:100%;text-align:right">
                    <button type="button" class="btn" id="addfield">+ Add New Field</button>
                </div>
                <br>
                <center>
                    <button class="btn cstmbtn btn-primary">Save</button>
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
    .row {
        margin-bottom: 15px
    }
</style>
<script>
    var id = 1;
    $('#pagesetting').addClass('active')
    ClassicEditor.create( document.querySelector( '#description' )).catch( error => {
        console.error( error );
    } );
    $('#addfield').on('click', () => {
        html = '<div id="field-'+id+'"><div class="row"><div class="col-md-4"><div class="form-input"><input type="text" name="title[]" id="title[]" required autocomplete="off">'
        html = html + '<label for="title" class="label-name"><span class="content-name">Course Title<small>(Required)</small></span></label></div>'
        html = html + '<div style="width:100%;text-align:right;padding-top:20px"><button type="button" class="btn" onclick="remove('+id+')"><span class="material-icons-outlined" style="color:red"> close </span></button></div></div>'
        html = html + '<div class="col-md-8"><label for="description">Description<small>(Required)</small></label>'
        html = html + '<textarea name="description[]" id="description-'+id+'" cols="30" rows="10" class="form-control"></textarea></div></div></div>'
        

        $('#add').append(html)

        ClassicEditor.create( document.querySelector( '#description-'+id )).catch( error => {
            console.error( error );
        } );
        
        id++
    })

    function remove(id) {
        $('#field-'+id).remove()
    }
</script>
<div id="script">

</div>
@endsection






    
        
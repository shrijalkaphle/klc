@extends('layout.admin')
@section('title', $course->title . ' | Edit Additional')

@section('content')
    <div class="container">
        <div class="card card-body shadow-lg">
            <form action="{{ route('course.additional.update',$course->id) }}" method="post">
                @csrf
                @method('PUT')
                @php $i=0 @endphp
                @foreach($course->additional as $additional)
                <div id="field-{{ $i }}">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-input">
                                <input type="text" name="title[]" id="title[]" value="{{ $additional->title }}" required autocomplete="off">
                                <label for="title" class="label-name">
                                    <span class="content-name">Course Title<small>(Required)</small></span>
                                </label>
                            </div>
                            @if($i != 0)
                                <div style="width:100%;text-align:right;padding-top:20px"><button type="button" class="btn" onclick="remove('{{ $i }}')"><span class="material-icons-outlined" style="color:red"> close </span></button></div>
                            @endif
                        </div>
                        <div class="col-md-8">
                            <label for="description">Description<small>(Required)</small></label>
                            <textarea name="description[]" id="description-{{ $i }}" cols="30" rows="10" class="form-control">{{ $additional->description }}</textarea>
                        </div>
                    </div>
                </div>
                @php $i++ @endphp
                @endforeach
                <div id="add"></div>
                <div style="width:100%;text-align:right">
                    <button type="button" class="btn" id="addfield">+ Add New Field</button>
                </div>
                <br>
                <center>
                    <button class="btn cstmbtn btn-primary">Update</button>
                </center>
            </form>
        </div>
    </div>

@endsection

@section('script')

@php $i=0 @endphp
@foreach($course->additional as $additional)
    <script>
        var i = '<?=$i?>'
        ClassicEditor.create( document.querySelector( '#description-'+i )).catch( error => {
            console.error( error );
        } );
    </script>
    @php $i++ @endphp
@endforeach

<style>
    .spacer {
        height: 30px;
    }
    .row {
        margin-bottom: 15px
    }
</style>
<script>
    var id = 99;
    $('#pagesetting').addClass('active')
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
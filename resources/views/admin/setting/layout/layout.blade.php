@extends('layout.admin')
@section('title','Layout Page')

@section('content')
    <div class="container">
        <input type="hidden" name="page" id="page" value="{{ $page }}">
        @csrf
        <div class="card-body shadow-lg draggable-container">
            @foreach($layout as $l)
            <div class="layout-div shadow draggable" id="{{ $l->id }}" draggable="true" touchable="true" style="text-transform: capitalize">
                {{ $l->title }}
            </div>
            @endforeach
        </div>
    </div>
@endsection
@section('script')
    {{-- <script src="{{ asset('assets/js/draggable.js') }}"></script> --}}
    <style>
        .draggable{
            padding: 20px;
            margin-bottom: 15px;
            cursor: move
        }
        .card-body {
            width: 60%;
            margin: auto
        }
        .draggable.dragging {
            opacity: 0.5;
        }
    </style>
    <script>
        $('#layoutupdate').addClass('active')
        
        $('.draggable-container').sortable({
            delay: 150,
            stop:function() {
                var seletedData = new Array();
                $('.draggable-container>div').each(function() {
                    seletedData.push($(this).attr('id'))
                })
                updateOrder(seletedData)
            }
        })

        function updateOrder(data) {
            var page = $('#page').val()
            _token = '{{ csrf_token() }}'
            $('#loading').removeClass('hidden');
            $.ajax({
                url: '/layout/update',
                type: 'POST',
                data: { allData: data, page: page, _token:_token },
                success: function(res) { },
                complete: function(){
                    $('#loading').addClass('hidden');
                }
            })
        }
    </script>
@endsection
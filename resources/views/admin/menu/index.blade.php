@extends('layout.admin')
@section('title','Page Setting')

@section('content')
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-body draggable-container">
                @foreach($menus as $menu)
                    <div id="{{$menu->id}}">
                        <div class="menu">
                            <div class="row">
                                <div class="col"> {{$menu->title}} </div>
                                <div class="col" style="text-align:right">
                                    <span class="material-icons-outlined" onclick="showmenu({{$menu->id}})" > expand_more </span>
                                </div>
                            </div>
                            <div class="menu-edit menuedit-{{$menu->id}}">
                                <form action="{{ route('mainmenu.update',$menu->id) }}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" value="{{$menu->id}}">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" value="{{$menu->title}}" class="form-control" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="link">Link</label>
                                            <input type="text" name="link" value="{{$menu->link}}" class="form-control" required>
                                        </div>
                                        <div class="col-md-4">
                                        <button class="btn btn-primary" style="margin-top:25px">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @foreach($menu->page as $page)
                            <div class="menu children">
                                {{$page->title}}
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('script')
<style>
    .menu {
        background: #F5F5F5;
        padding: 15px;
        width: 50%;
        margin-bottom: 10px;
        border: 1px solid #DDDDDD;
        cursor: move;
    }
    .menu-edit {
        width: 100%;
        padding:20px;
        margin-bottom:10px;
        display: none
    }
    .children {
        margin-left: 50px;
        width: calc(50% - 50px)
    }
    .menu-edit.children {
        margin-left: 1px !important;
    }
</style>
<script>
    $('#menu').addClass('active')
    function showmenu(id) {
        $('.menuedit-'+id).slideToggle()
    }
    function showsub(id) {
        $('.subedit-'+id).slideToggle()
    }
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
            _token = '{{ csrf_token() }}'
            $('#loading').removeClass('hidden');
            $.ajax({
                url: '/mainmenu/updatelayout',
                type: 'POST',
                data: { allData: data, _token:_token },
                success: function(res) { },
                complete: function(){
                    $('#loading').addClass('hidden');
                }
            })
        }
</script>
@endsection
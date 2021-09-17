@extends('layout.admin')
@section('title','Facts | Layout Page')

@section('content')
    <div class="container-fluid content-fluid">
        <form action="{{ route('fact.update')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$fact->id}}">
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="fact1">Facts 1</label>
                    <input type="text" class="form-control" name="fact1" value="{{$fact->fact1}}" required>
                </div>
                <div class="col-md-6">
                    <label for="title">Value</label>
                    <input type="text" class="form-control" name="fact1value" value="{{$fact->fact1value}}" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="fact2">Facts 2</label>
                    <input type="text" class="form-control" name="fact2" value="{{$fact->fact2}}" required>
                </div>
                <div class="col-md-6">
                    <label for="title">Value</label>
                    <input type="text" class="form-control" name="fact2value" value="{{$fact->fact2value}}" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="fact3">Facts 3</label>
                    <input type="text" class="form-control" name="fact3" value="{{$fact->fact3}}" required>
                </div>
                <div class="col-md-6">
                    <label for="title">Value</label>
                    <input type="text" class="form-control" name="fact3value" value="{{$fact->fact3value}}" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="fact4">Facts 4</label>
                    <input type="text" class="form-control" name="fact4" value="{{$fact->fact4}}" required>
                </div>
                <div class="col-md-6">
                    <label for="title">Value</label>
                    <input type="text" class="form-control" name="fact4value" value="{{$fact->fact4value}}" required>
                </div>
            </div>
            <div class="spacer"></div>
            <center>
                <input type="submit" value="Update" class="btn btn-primary">
            </center>
        </form>
    </div>
@endsection
@section('script')
    <style>
        .content-fluid {
            width: 90%;
        }
        .draggable{
            padding: 20px;
            margin-bottom: 15px;
            cursor: move
        }
        .card-header {
            background: transparent
        }
        .card {
            border-radius: 0;
            border: 0
        }
        .draggable.dragging {
            opacity: 0.5;
        }
        .block-div {
            background: #F5F5F5;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #DDDDDD;

        }
    </style>
@endsection
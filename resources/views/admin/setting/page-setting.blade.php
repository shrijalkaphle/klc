@extends('layout.admin')
@section('title','Page Setting')

@section('content')

    <div class="container">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="text-transform: capitalize">
                <strong> <span class="material-icons-outlined"> check_circle </span> </strong>
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-transform: capitalize">
                <strong> <span class="material-icons-outlined"> error </span> </strong>
                {{ Session::get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table">
            <thead>
                <th>Page</th>
                <th>Modified At</th>
                <th></th>
            </thead>
            <tbody>
                <tr>
                    <td style="padding-top:15px"> <a href="about" target="_blank">About Page</a> </td>
                    <td style="padding-top:15px"> {{ date('M j, Y', strtotime($about->updated_at)) }} </td>
                    <td style="text-align: right">
                        <form action="{{ route('about.edit',$about->id) }}" style="display:inline-block">
                            <button class="action" type="submit"><span class="material-icons-outlined"> edit </span></button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="spacer"></div>
        <div class="row">
            <div class="col">
                <h5>Course</h5>
            </div>
            <div class="col" style="text-align: right">
                <a class="btn cstmbtn btn-primary" style="float:right" href="{{ route('course.create') }}">
                    <span class="material-icons-outlined"> add </span>
                    Add New Course
                </a>
            </div>
        </div>
        <table class="table">
            <thead>
                <th>Page</th>
                <th>Modified At</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td style="padding-top:15px"> <a href="{{ route('course', $course->slug) }}" target="_blank">{{ $course->title }}</a> </td>
                        <td style="padding-top:15px"> {{ date('M j, Y', strtotime($course->updated_at)) }} </td>
                        <td style="text-align: right">
                            <form action="{{ route('course.edit', $course->id) }}" style="display:inline-block">
                                <button class="action" type="submit"><span class="material-icons-outlined"> edit </span></button>
                            </form>
                            <form action="{{ route('course.destroy', $course->id) }}" method="post" id="deletecourse-{{$course->id}}" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="action delete-course" type="button" data-id="{{$course->id}}" data-bs-toggle="modal"
                                data-bs-target="#courseModal"><span class="material-icons-outlined"> delete </span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="spacer"></div>
        <div class="row">
            <div class="col">
                <h5>Country</h5>
            </div>
            <div class="col" style="text-align: right">
                <a class="btn cstmbtn btn-primary" style="float:right" href="{{ route('country.create') }}">
                    <span class="material-icons-outlined"> add </span>
                    Add New Country
                </a>
            </div>
        </div>
        <table class="table">
            <thead>
                <th>Page</th>
                <th>Modified At</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($countries as $country)
                    <tr>
                        <td style="padding-top:15px"> <a href="{{ route('country', $country->slug) }}" target="_blank">{{ $country->title }}</a> </td>
                        <td style="padding-top:15px"> {{ date('M j, Y', strtotime($country->updated_at)) }} </td>
                        <td style="text-align: right">
                            <form action="{{ route('country.edit',$country->id) }}" style="display:inline-block">
                                <button class="action" type="submit"><span class="material-icons-outlined"> edit </span></button>
                            </form>
                            <form action="{{ route('country.destroy', $country->id) }}" method="post" id="deletecountry-{{$country->id}}" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="action delete-country" type="button" data-id="{{$country->id}}" data-bs-toggle="modal"
                                data-bs-target="#countryModal"><span class="material-icons-outlined"> delete </span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="countryModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">
                        <span style="color:red"><i class="fas fa-info-circle"></i></span>
                        Confirm Delete
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-country">
                    <input type="hidden" name="countryid" id="countryid">
                    Are You Sure Want to Delete?
                </div>
                <div class="modal-footer">
                    <button type="sumbit" class="btn btn-danger" id="confirmCountry">Confirm</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="courseModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">
                        <span style="color:red"><i class="fas fa-info-circle"></i></span>
                        Confirm Delete
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-course">
                    <input type="hidden" name="courseid" id="courseid">
                    Are You Sure Want to Delete?
                </div>
                <div class="modal-footer">
                    <button type="sumbit" class="btn btn-danger" id="confirmCourse">Confirm</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('script')
<style>
    .spacer {
        height:30px
    }
    .disable {
        padding: 10px;
        color: red;
        background: transparent;
        border: 0;
        border-radius: 20px;
    }
    .disable:hover {
        color: white;
        background: red;
        border: 0
    }
    .enable {
        padding: 10px;
        color: green;
        background: transparent;
        border: 0;
        border-radius: 20px;
    }
    .enable:hover {
        color: white;
        background: green;
        border: 0
    }
</style>
<script>
    $('#pagesetting').addClass('active')
    $('.delete-country').on('click', function() {
        $('.modal-country #countryid').val($(this).data('id'))
    })
    $('#confirmCountry').on('click', function() {
        var id = $('.modal-country #countryid').val()
        $('#deletecountry-'+id).submit()
    })
    $('.delete-course').on('click', function (){
        $('.modal-course #courseid').val($(this).data('id'))
    })
    $('#confirmCourse').on('click', function() {
        var id = $('.modal-course #courseid').val()
        $('#deletecourse-'+id).submit()
    })
</script>
@endsection
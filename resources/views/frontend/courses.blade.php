@extends('layout.frontend')

@section('title','Courses | KLC Education Consultancy')

@section('body')
<div class="courses-area courses-section pt-100 pb-70">
    <div class="container">
        <div class="edemy-grid-sorting row align-items-center">
            <div class="col-lg-8 col-md-6 result-count">
                <p> We found <span class="count"> {{$courses->count()}} </span> courses available for you </p>
            </div>
        </div>
        <div class="row">
            @foreach($courses as $course)
            <div class="col-lg-4 col-md-6">
                <div class="single-courses-box">
                    <div class="courses-image">
                        <a class="d-block image" href="{{ route('coursesub', $course->slug) }}">
                            <img src="images/{{$course->image}}" alt="" />
                        </a>
                    </div>
                    <div class="courses-content">
                        <h3 title="{{$course->title}}">
                            <a href="{{ route('coursesub', $course->slug) }}">{{ mb_strimwidth($course->title, 0, 18, '...') }}</a>
                        </h3>
                        <p>
                            {!! mb_strimwidth(strip_tags($course->content), 0, 98, '...') !!}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('.course').addClass('active')
</script>
@endsection
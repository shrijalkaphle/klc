@extends('layout.frontend')


@section('title', 'Blog | ' . $sitesetting->title)

@section('body')
<div class="blog-area ptb-100">
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post-box">
                    <div class="post-image">
                        <a class="d-block" href="{{ route('blogs.view',$blog->slug) }}">
                            <img src="{{ asset('images/'.$blog->cover) }}" alt="image" style="max-height: 250px"/>
                        </a>
                    </div>
                    <div class="post-content">
                        <h3><a href="{{ route('blogs.view',$blog->slug) }}">{{ $blog->title }}</a></h3>
                        <ul class="post-content-footer d-flex justify-content-between align-items-center">
                            <li>
                                <div class="post-author d-flex align-items-center">
                                    <img src="{{ asset('assets/images/default-user.png') }}" class="rounded-circle" alt="image"/><span>{{ $blog->author }}</span>
                                </div>
                            </li>
                            <li><i class="flaticon-calendar"></i> {{ date('M j, Y', strtotime($blog->created_at)) }} </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div id="paginate" class="row">
            <div class="col-12 d-flex justify-content-center pt-5">
                {{$blogs->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <style>
        .pagination .page-link {
            color:#FE4A55
        }
        .pagination .active .page-link {
            background:#FE4A55 !important;
            border: 0
        }
        
    </style>
    <script>
        $('.blog').addClass('active')
    </script>
@endsection
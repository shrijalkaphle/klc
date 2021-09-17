<div class="blog-area">
    <div class="container">
        <div class="section-title"><span class="sub-title">News and Blogs</span>
            <h2>Check Out Our Latest Blog</h2>
        </div>
        <div class="row justify-content-center">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a class="d-block" href="{{ route('blogs.view',$blog->slug) }}">
                            <img src="{{ asset('images/'.$blog->cover) }}" alt="image" style="max-height: 250px"/>
                        </a>
                    </div>
                    <div class="post-content">
                        <h3>
                            <a href="{{ route('blogs.view',$blog->slug) }}">{{ $blog->title }}</a>
                        </h3>
                        <ul class="post-content-footer d-flex justify-content-between align-items-center">
                            <li>
                                <div class="post-author d-flex align-items-center">
                                    <img src="{{ asset('assets/images/default-user.png') }}" class="rounded-circle" alt="image" />
                                    <span> {{ $blog->author }} </span>
                                </div>
                            </li>
                            <li><i class="flaticon-calendar"></i> {{ date('M j, Y', strtotime($blog->created_at)) }} </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
	.blog-area {
      padding-top: 60px;
      padding-bottom: 60px
    }
  
    .blog-area .section-title {
     	margin-bottom: 40px
    }
</style>
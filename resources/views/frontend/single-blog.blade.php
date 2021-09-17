@extends('layout.frontend')


@section('title', $blog->title.' | ' . $sitesetting->title)

@section('body')
<div class="blog-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="article-image">
                        <img src="{{ asset('images/'.$blog->cover) }}" alt="image" />
                    </div>
                    <div class="article-content">
                        <div class="entry-meta">
                            <ul>
                                <li>
                                    <i class="bx bx-calendar"></i>
                                    <span>Last Updated</span>
                                    <a href="#">{{ date('M j, Y', strtotime($blog->created_at)) }}</a>
                                </li>
                            </ul>
                        </div>
                        <h3>{{ $blog->title }}</h3>
                        <p> {!! $blog->body !!} </p>
                    </div>
                    <div class="article-footer">
                        <div class="article-tags">
                            <span><i class="bx bx-purchase-tag"></i></span>
                            <a href="#">{{ $blog->tag }}</a>
                        </div>
                        <div class="article-share">
                        <ul class="social">
                            <li><span>Share:</span></li>
                            <li>
                                <a href="#" class="facebook" target="_blank">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter" target="_blank">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin" target="_blank">
                                    <i class="bx bxl-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                    <div class="article-author">
                        <div class="author-profile-header"></div>
                        <div class="author-profile">
                            <div class="author-profile-title">
                                <img src="{{ asset('assets/images/default-user.png') }}" class="shadow-sm" alt="image"/>
                                <div class="author-profile-title-details">
                                    <div class="author-profile-details">
                                        <h4>admin</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                    <h3 class="comments-title">Comments:</h3>
                    <ol class="comment-list">
                        @foreach($blog->comment as $comment)
                        <li class="comment">
                            <div class="comment-body">
                                <div class="comment-meta">
                                    <div class="comment-author vcard">
                                        <img src="{{ asset('assets/images/default-user.png') }}" class="avatar" alt="image" />
                                        <b class="fn">{{ $comment->name }}</b>
                                        <span class="says">says:</span>
                                    </div>
                                    <div class="comment-metadata">
                                        <span>{{ date('M j, Y', strtotime($comment->created_at)) }} at {{ date('H:i A', strtotime($comment->created_at)) }}</span>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <p>
                                        {{ $comment->comment }}
                                    </p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ol>
                    <div class="comment-respond">
                        <h3 class="comment-reply-title">Leave a Reply</h3>
                            <form class="comment-form" method="POST" action="{{ route('blog.comment') }}">
                                @csrf
                                <input type="hidden" name="blogs_id" value="{{ $blog->id }}">
                                <p class="comment-notes">
                                    Required fields are marked<span class="required">*</span>
                                </p>
                                <p class="comment-form-url">
                                    <label>Name <span class="required">*</span></label>
                                    <input type="text" id="author" placeholder="Your Name*" name="name" required=""/>
                                </p>
                                <p class="comment-form-comment">
                                    <label>Comment<span class="required">*</span></label>
                                    <textarea name="comment" id="comment" cols="45" placeholder="Your Comment...*" rows="5" maxlength="65525" required=""></textarea>
                                </p>
                                <p class="form-submit">
                                    <input type="submit" name="submit" id="submit" class="submit" value="Post A Comment"/>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="widget-area">
                    <div class="widget widget_search">
                        <h3 class="widget-title">Search</h3>
                        <form class="search-form">
                            <label>
                                <input type="search" class="search-field" placeholder="Search..." />
                            </label>
                            <button type="submit">
                                <i class="bx bx-search-alt"></i>
                            </button>
                        </form>
                    </div>
                    <div class="widget widget_edemy_posts_thumb">
                        <h3 class="widget-title">Popular Posts</h3>
                        @foreach($recentblogs as $blog)
                        <div class="item">
                            <a class="thumb" href="{{ route('blogs.view',$blog->slug) }}">
                                <span class="fullimage cover bg1" role="img">
                                    <img src="{{ asset('images/'.$blog->cover) }}" alt="">
                                </span>
                            </a>
                            <div class="info">
                                <span>{{ date('M j, Y', strtotime($blog->created_at)) }}</span>
                                <h4 class="title usmall">
                                    <a href="{{ route('blogs.view',$blog->slug) }}">{{ $blog->title }}</a>
                                </h4>
                            </div>
                            <div class="clear"></div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape3"><img src="{{ asset('assets/images/shape3.png') }}" alt="image" /></div>
    <div class="shape4"><img src="{{ asset('assets/images/shape4.png') }}" alt="image" /></div>
    <div class="shape2"><img src="{{ asset('assets/images/shape2.png') }}" alt="image" /></div>
</div>
@endsection

@section('script')
<script src="{{ asset('assets/js/social-share.js') }}"></script>
    <style>
        h3 {
            color:#FE4A55
        }
    </style>
    <script>
        $('.blog').addClass('active')
    </script>
@endsection
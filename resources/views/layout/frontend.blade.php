<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta name="application-name" content="{{ $sitesetting->title }}" />
    <meta charSet="utf-8" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/'.$sitesetting->favicon) }}" type="image/x-icon">
    <meta name="title" content="{{ $sitesetting->title }}">
    <meta name="keywords" content="{{ $sitesetting->keyword }}">
    <meta name="description" content="{{ $sitesetting->description }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="preload" href="{{ asset('assets/_next/static/css/bc7cb5acceb1aa8d05b9.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('assets/_next/static/css/bc7cb5acceb1aa8d05b9.css') }}" data-n-g="" />
    <link rel="preload" href="{{ asset('assets/_next/static/css/2879cb53665fd0c81286.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('assets/_next/static/css/2879cb53665fd0c81286.css') }}" data-n-g="" />
    <link rel="preload" href="{{ asset('assets/_next/static/css/4fa6bda648c9577e6b17.css') }}" as="style" />
    <link rel="stylesheet" href="{{ asset('assets/_next/static/css/4fa6bda648c9577e6b17.css') }}" data-n-g="" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="preload" href="{{ asset('assets/_next/static/chunks/webpack-0e2ed6f00cb6acdb741d.js') }}" as="script" />
    <link rel="preload" href="{{ asset('assets/_next/static/chunks/framework.33edf24cd040bcfe1fae.js') }}" as="script" />
    <link rel="preload" href="{{ asset('assets/_next/static/chunks/9ba3a4be.cdfd26668d511e5abe70.js') }}" as="script" />
    <link rel="preload" href="{{ asset('assets/_next/static/chunks/93d4e12a.32a900ab33cf3256d22d.js') }}" as="script" />
    <link rel="preload" href="{{ asset('assets/_next/static/chunks/commons.e0ef861b00bfe79a3876.js') }}" as="script" />
    <link rel="preload" href="{{ asset('assets/_next/static/chunks/b5fc9ed5caee09d09d686488fb24c272fdd9c981.83803746f9f351ae3b63.js') }}"
        as="script" />
    <link rel="preload" href="{{ asset('assets/_next/static/chunks/7210ba73c039bce3e1f8237eb6acbdc2995269b2.27217100cd621c802437.js') }}"
        as="script" />
    <link rel="preload" href="{{ asset('assets/_next/static/chunks/c6464ce45454a8a567d341c8d3b5fce3b9953bc5.9bbc3f6df6e0ef063202.js') }}"
        as="script" />
    <link rel="preload" href="{{ asset('assets/_next/static/chunks/ca92af84a5277c2d4f7907f2d3fdddd999dec0ab.e4949b0e39994ee238d2.js') }}"
        as="script" />
    <link rel="preload" href="{{ asset('assets/_next/static/chunks/pages/_app-385b1ef9d645420c49b8.js') }}" as="script" />
    <link rel="preload" href="{{ asset('assets/_next/static/chunks/616f372e23ed355480d332b98cb967f131ee6a04.0a65cb8ec15e842b023d.js') }}"
        as="script" />
    <link rel="preload" href="{{ asset('assets/_next/static/chunks/9b799ffe5c57d7d055f9e812834710a2285534cf.3449e7726af23f9bb536.js') }}"
        as="script" />
    <link rel="preload" href="{{ asset('assets/_next/static/chunks/pages/index-67624545d69b54db1391.js') }}" as="script" />
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    
</head>

<body>
    <div id="__next">
      <div style="position:fixed;z-index:9999"></div>
        <div id="navbar" class="navbar-area">
            <div class="edemy-nav">
                <div class="container-fluid">
                    <div class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/'.$sitesetting->logo) }}" alt="logo" style="max-height: 70px !important;max-width:320px !important" />
                        </a>
                        <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar top-bar"></span>
                          	<span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                @foreach($menus->sortBy('position') as $menu)
                                    <li class="nav-item">
                                        <a class="nav-link {{ strtolower($menu->title) }}" href="{{$menu->link}}" onclick="trigerDropdown('{{strtolower($menu->title)}}')">
                                            {{$menu->title}} 
                                            @if($menu->page->isnotEmpty()) 
                                                <i class="bx bx-chevron-down"></i>
                                            @endif
                                        </a>
                                        @if($menu->page->isnotEmpty()) 
                                            <ul class="dropdown-menu" id="dropdown-{{ strtolower($menu->title) }}">
                                                @foreach($menu->page->where('status','!=','0') as $page)
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ $page->link }}">{{ $page->title }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                                
                            </ul>
                            <div class="others-option d-flex align-items-center">
                            @if(Session::has('user'))
                                <div class="option-item"><a class="default-btn" href="/dashboard">
                                    <i class="flaticon-user"></i> Dashboard
                                </a></div>
                                <div class="option-item">
                                    <div class="cart-btn"><a class="" href=" {{ route('users.signout') }} ">
                                        <i class="fas fa-sign-out-alt"></i>
                                    </a></div>
                                </div>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('body')
        <div class="go-top" id="go-top"><i class="bx bx-chevron-up"></i></div>
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <img src="/images/{{$sitesetting->logo}}" style="max-height:80px">
                            <p style="margin-top:10px"> {{ $sitesetting->footertext }} </p>
                            <ul class="social-link">
                                @if($sitesetting->facebook)
                                <li><a href="https://www.facebook.com/{{$sitesetting->facebook}}/" class="d-block" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                @endif
                                @if($sitesetting->twitter)
                                <li><a href="https://twitter.com/{{$sitesetting->twitter}}" class="d-block" target="_blank"><i class="bx bxl-twitter"></i></a></li>
                                @endif
                                @if($sitesetting->instagram)
                                <li><a href="https://www.instagram.com/{{$sitesetting->instagram}}/" class="d-block" target="_blank"><i class="bx bxl-instagram"></i></a> </li>
                                @endif
                                @if($sitesetting->linkedin)
                                <li><a href="https://www.linkedin.com/in/{{$sitesetting->linkedin}}/" class="d-block" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget pl-5">
                            <h3>Explore</h3>
                            <ul class="footer-links-list">
                                <li><a href="/">Home</a></li>
                                <li><a href="about">About</a></li>
                                <li><a href="blog">Blog</a></li>
                                <li><a href="contact">Contact</a></li>
                                <li><a href="login">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Quick Links</h3>
                            <ul class="footer-links-list">
                                @foreach($footerlink as $link)
                                    <li><a href="{{$link->link}}">{{$link->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Address</h3>
                            <ul class="footer-contact-info">
                                <li><i class="bx bx-map"></i>{{ $sitesetting->address }}</li>
                                <li><i class="bx bx-phone-call"></i><a href="tel:{{ $sitesetting->phone }}">{{ $sitesetting->phone }}</a>
                                </li>
                                <li><i class="bx bx-envelope"></i>
                                    <a href="mailto:{{ $sitesetting->email }}">{{ $sitesetting->email }}</a>
                                </li>
                                @if( $sitesetting->timing )
                                    <li><i class="bx bxs-time-five"></i>{{ $sitesetting->timing }}</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-area">
                    <p style="text-align: right;font-size:12px">
                        <a href="/terms-condition">Terms and Condition</a> | <a href="/privacy-policy">Privacy Policy</a>
                    </p>
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <p>
                                Copyright <i class="bx bx-copyright"></i>2021 <a href="/">KLC Education Consultancy</a>. All rights reserved.
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <p style="text-align: right">
                                Website Developed with love by <a href="https://paradiseit.com.np/" target="_blank">Paradise IT Solution</a>
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </footer>
        <style data-emotion-css="lim4fg">
            .css-lim4fg {
                box-sizing: border-box;
                max-height: 100%;
                overflow-x: hidden;
                overflow-y: auto;
                padding: 8px;
                pointer-events: none;
                position: fixed;
                z-index: 1000;
                bottom: 0;
                left: 0;
            }
        </style>
        <div class="react-toast-notifications__container css-lim4fg"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/underscore@1.13.1/underscore-umd-min.js"></script>
    @yield('script')
    <script data-cfasync="false" src="{{ asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script nomodule="" src="{{ asset('_next/static/chunks/polyfills-8b2baaf1170bd718967b.js') }}"></script>
    {{-- <script src="{{ asset('assets/_next/static/chunks/main-0dadd921d44524024e1e.js') }}" async=""></script> --}}
    <script src="{{ asset('assets/_next/static/chunks/webpack-0e2ed6f00cb6acdb741d.js') }}" async=""></script>
    <script src="{{ asset('assets/_next/static/chunks/framework.33edf24cd040bcfe1fae.js') }}" async=""></script>
    <script src="{{ asset('assets/_next/static/chunks/9ba3a4be.cdfd26668d511e5abe70.js') }}" async=""></script>
    <script src="{{ asset('assets/_next/static/chunks/93d4e12a.32a900ab33cf3256d22d.js') }}" async=""></script>
    <script src="{{ asset('assets/_next/static/chunks/commons.e0ef861b00bfe79a3876.js') }}" async=""></script>
    <script src="{{ asset('assets/_next/static/chunks/b5fc9ed5caee09d09d686488fb24c272fdd9c981.83803746f9f351ae3b63.js') }}"
        async=""></script>
    <script src="{{ asset('assets/_next/static/chunks/7210ba73c039bce3e1f8237eb6acbdc2995269b2.27217100cd621c802437.js') }}"
        async=""></script>
    <script src="{{ asset('assets/_next/static/chunks/c6464ce45454a8a567d341c8d3b5fce3b9953bc5.9bbc3f6df6e0ef063202.js') }}"
        async=""></script>
    <script src="{{ asset('assets/_next/static/chunks/ca92af84a5277c2d4f7907f2d3fdddd999dec0ab.e4949b0e39994ee238d2.js') }}"
        async=""></script>
    <script src="{{ asset('assets/_next/static/chunks/pages/_app-385b1ef9d645420c49b8.js') }}" async=""></script>
    <script src="{{ asset('assets/_next/static/chunks/616f372e23ed355480d332b98cb967f131ee6a04.0a65cb8ec15e842b023d.js') }}"
        async=""></script>
    <script src="{{ asset('assets/_next/static/chunks/9b799ffe5c57d7d055f9e812834710a2285534cf.3449e7726af23f9bb536.js') }}"
        async=""></script>
    <script src="{{ asset('assets/_next/static/chunks/pages/index-67624545d69b54db1391.js') }}" async=""></script>
    <script src="{{ asset('assets/_next/static/7MSwcE26YlqfOXJFtERIB/_buildManifest.js') }}" async=""></script>
    <script src="{{ asset('assets/_next/static/7MSwcE26YlqfOXJFtERIB/_ssgManifest.js') }}" async=""></script>
    <script src="{{ asset('assets/js/frontend.js') }}" async=""></script>
    <script>
        var loader = document.getElementById('loading')
        function disableLoader() {
            loader.style.display = 'none'
        }
      	$('.navbar-toggler').on('click', ()=>{
          $('.navbar-collapse').toggleClass('show')
          $('.navbar-toggler').toggleClass('collapsed')
          $('.dropdown-menu').toggle()
        })
        function trigerDropdown(name) {
          $('#dropdown-'+name).toggle()
        }
        
    </script>
  <style>
  	@media(max-width: 1367px) {
     .main-banner-area .container-fluid {
        padding:10px 30px 0 30px;
      } 
    }
  </style>
</body>

</html>
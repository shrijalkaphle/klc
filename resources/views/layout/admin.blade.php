<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('images/site-images/admin-favicon.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/darkmode.css') }}">
    <style>
        .hidden {
            display:none !important
        }
        #loading {
            position: fixed;
            display:flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 100vh;
            background: rgba(0,0,0,0.5);
            z-index: 99999;
        }
        .loader {
            border: 7px solid #f3f3f3;
            border-radius: 50%;
            border-top: 7px solid #3498db;
            width: 60px;
            height: 60px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 2s linear infinite;
        }

            /* Safari */
        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div id="loading" class="hidden">
        <center><div class="loader"></div></center>
    </div>
    <!-- navbar -->
    <div class="top-navbar" id="topnav">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 nav-header">
                    <a href="/"><img src="{{ asset('assets/images/logo.png') }}" class="nav-logo" alt=""></a>
                    <span class="material-icons-outlined" id="sidebarToogle"> menu </span>
                </div>
                <div class="col-md-6 nav-information">
                    <button class="logout" onclick=" window.location.href = 'signout' ">
                        <span class="material-icons-outlined">logout</span>
                        <span>Logout</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- sidenav -->
    <div class="sidebar" id="sidebar">
        <br>
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item" id="dashboard"><a href="dashboard" class="nav-link">
                    <span class="material-icons-outlined"> dashboard </span>
                    &nbsp; Dashboard
                </a></li>
                <li class="nav-item" id="user"><a href="{{ route('users.index') }}" class="nav-link">
                    <span class="material-icons-outlined"> people </span>
                    &nbsp; Users
                </a></li>
                <li class="nav-item" id="blogs"><a href="{{ route('blogs.index') }}" class="nav-link">
                    <span class="material-icons-outlined"> rss_feed </span>
                    &nbsp; Blogs
                </a></li>
                <li class="nav-item" id="services"> <a href="{{ route('services.index') }}" class="nav-link">
                    <span class="material-icons-outlined"> design_services </span>
                    &nbsp; Services
                </a></li>
                <li class="nav-item" id="testimonial"> <a href="{{ route('testimonial.index') }}" class="nav-link">
                    <span class="material-icons-outlined"> reviews </span>
                    &nbsp; Testimonials
                </a></li>
                <li class="nav-item" id="gallery"><a href="{{ route('galleries.index') }}" class="nav-link">
                    <span class="material-icons-outlined"> collections </span>
                    &nbsp; Gallery
                </a></li>
                <li class="nav-item" id="team"><a href="{{ route('teams.index') }}" class="nav-link">
                    <span class="material-icons-outlined"> groups </span>
                    &nbsp; Our Teams
                </a></li>
                <li class="nav-item" id="menu"><a href="{{ route('mainmenu.index') }}" class="nav-link">
                    <span class="material-icons-outlined"> menu </span>
                    &nbsp; Main Menu
                </a></li>
                <li class="nav-item" id="pagesetting"> <a class="nav-link" href="{{ route('pages.index') }}" >
                        <span class="material-icons-outlined"> description </span>
                        &nbsp; Page Settings
                </a></li>
                <li class="nav-item" id="layoutupdate"> <a class="nav-link" href="{{ route('layout.index') }}">
                    <span class="material-icons-outlined"> view_agenda </span>
                    &nbsp; Layout
                </a></li>
                <li class="nav-item" id="sitesetting"><a href="{{ route('site-setting.index') }}" class="nav-link">
                    <span class="material-icons-outlined"> settings </span>
                    &nbsp; Site Settings
                </a></li>
                <hr>
                <li class="nav-item" id="termscondition"><a href="{{ route('termscondition.index') }}" class="nav-link">
                    <span class="material-icons-outlined"> gavel </span>
                    &nbsp; Terms & Conditions
                </a></li>
                <li class="nav-item" id="privacypolicy"><a href="{{ route('privacypolicy.index') }}" class="nav-link">
                    <span class="material-icons-outlined"> shield </span>
                    &nbsp; Privacy Policy
                </a></li>
            </ul>
        </div>
    </div>

    <!-- content -->
    <div class="content">
        @yield('content')
    </div>
    <!-- end content -->
    {{-- <div class="dark-button" id="darkModeToogle">
        <span class="material-icons-outlined" id="darkimage">dark_mode</span>
    </div> --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0-rc.2/jquery-ui.min.js" integrity="sha256-RQLbEU539dpygNMsBGZlplus6CkitaLy0btTCHcULpI=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    @include('layout.ckeditor')
    <script>
        var loader = document.getElementById('loading')
        function disableLoader() {
            loader.style.display = 'none'
        }
    </script>
</body>
</html>

<style>
    .collapse .nav-item {
        
    }
</style>

@yield('script')
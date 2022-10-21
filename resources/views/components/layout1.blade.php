<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Required meta tags -->

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.png') }}">

    <title>LaraGigs | Find Jobs & Tech Projects</title>

    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="{{ asset('theme/style.css') }}">
</head>

<body>

<div class="main-container-wrapper">
    <!-- Top bar area -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="{{ route('main') }}">
                <img src="{{ asset('img/core-img/logo.png') }}"
                     class="mr-2" alt="logo"
                     width="30" height="35"
                     style="vertical-align:middle;margin:50px 0px"
                />
            </a>
            <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}"><img src="{{ asset('img/core-img/small-logo.png') }}"
                                                                           alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
            <!-- Search top bar -->
            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item app-search d-none d-md-block">
                    <form role="search" class=""><input type="text" placeholder="Search..." class="form-control">
                        <button type="submit" class="search-btn mr-0"><i class="fa fa-search"></i></button></form>
                </li>
            </ul>

            @auth
                <!-- Authenticated User Profile -->
                <ul class="top-navbar-area navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown dropdown-animate">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{ asset('img/member-img/contact-2.jpg') }}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown profile-top"
                             aria-labelledby="profileDropdown">
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-account profile-icon"
                                                                 aria-hidden="true"></i> My profile</a>
                            <a href="javascript:void(0)" onclick="document.getElementById('form-logout').submit()" class="dropdown-item"><i class="ti-unlink profile-icon" aria-hidden="true"></i>
                                Sign-out</a>
                            <form class="inline" method="POST" action="{{ url('/logout') }}" id="form-logout">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            @endauth

            <button class="navbar-toggler navbar-toggler-right d-xl-none align-self-center" type="button"
                    data-toggle="offcanvas">
                <span class="ti-layout-grid2"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid page-body-wrapper">
        <!-- Side Menu area -->
        @include('partials._side-menu')

        <!-- Main Page -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="container-fluid">
                    <x-flash-message />
                    {{ $slot }}
                </div>

                <!-- Footer Area -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Footer Area -->
                            @include('partials._footer')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        setTimeout(hideFlashMessage, 3000);

        function hideFlashMessage() {
            document.getElementById('msg-flash').style.display = "none";
        }
    </script>

    <!-- Plugins Js -->
    <script src="{{ asset('theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/js/popper.min.js') }}"></script>
    <script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('theme/js/bundle.js') }}"></script>
    <script src="{{ asset('theme/js/default-assets/fullscreen.js') }}"></script>

    <!-- Active JS -->
    <script src="{{ asset('theme/js/canvas.js') }}"></script>
    <script src="{{ asset('theme/js/collapse.js') }}"></script>
    <script src="{{ asset('theme/js/settings.js') }}"></script>
    <script src="{{ asset('theme/js/template.js') }}"></script>
    <script src="{{ asset('theme/js/default-assets/active.js') }}"></script>

    <!-- Inject JS -->
    <script src="{{ asset('theme/js/default-assets/apexchart.min.js') }}"></script>
    <script src="{{ asset('theme/js/default-assets/apex-custom.js') }}"></script>
    <script src="{{ asset('theme/js/default-assets/dashboard-active.js') }}"></script>


</body>

</html>

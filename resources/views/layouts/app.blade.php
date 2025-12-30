<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- End Required meta tags -->

        <!-- Begin SEO tag -->
        <title> @yield('title') | Administrator </title>
        <meta property="og:title" content="Dashboard">
        <meta name="author" content="Beni Arisandi">
        <meta property="og:locale" content="en_US">
        <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
        <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
        <meta property="og:url" content="https://uselooper.com">
        <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
        @yield('meta')
        <!-- /Begin SEO tag -->

        <!-- FAVICONS -->
        <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::to('assets/images/favicons/apple-touch-icon.png') }}">
        <link rel="shortcut icon" href="{{ URL::to('assets/images/favicons/favicon.ico') }}">
        <meta name="theme-color" content="#3063A0">
        <!-- End FAVICONS -->

        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
        <!-- End GOOGLE FONT -->

        <!-- BEGIN PLUGINS STYLES -->
        <link rel="stylesheet" href="{{ URL::to('assets/open-iconic/font/css/open-iconic-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('assets/flatpickr/flatpickr.min.css') }}">
        <!-- END PLUGINS STYLES -->

        <!-- BEGIN THEME STYLES -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/theme.min.css') }}" data-skin="default">
        <link rel="stylesheet" href="{{ URL::to('assets/css/theme-dark.min.css') }}" data-skin="dark">
        <link rel="stylesheet" href="{{ URL::to('assets/css/custom.css') }}">
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
        <script>
            var skin = localStorage.getItem('skin') || 'default';
            var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
            // Disable unused skin immediately
            disabledSkinStylesheet.setAttribute('rel', '');
            disabledSkinStylesheet.setAttribute('disabled', true);
            // add loading class to html immediately
            document.querySelector('html').classList.add('loading');
        </script>
        <!-- END THEME STYLES -->
        @yield('style')
    </head>
    <body>
        <!-- .app -->
        <div class="app">
            <!-- .app-header -->
            <header class="app-header app-header-dark">
                <!-- .top-bar -->
                <div class="top-bar">
                    <!-- .top-bar-brand -->
                    <div class="top-bar-brand">
                        <!-- toggle aside menu -->
                        <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu" aria-label="toggle aside menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
                        <!-- /toggle aside menu -->
                        <a href="{{ route('dashboard') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="28" viewbox="0 0 351 100">
                                <defs>
                                    <path id="a" d="M156.538 45.644v1.04a6.347 6.347 0 0 1-1.847 3.98L127.708 77.67a6.338 6.338 0 0 1-3.862 1.839h-1.272a6.34 6.34 0 0 1-3.862-1.839L91.728 50.664a6.353 6.353 0 0 1 0-9l9.11-9.117-2.136-2.138a3.171 3.171 0 0 0-4.498 0L80.711 43.913a3.177 3.177 0 0 0-.043 4.453l-.002.003.048.047 24.733 24.754-4.497 4.5a6.339 6.339 0 0 1-3.863 1.84h-1.27a6.337 6.337 0 0 1-3.863-1.84L64.971 50.665a6.353 6.353 0 0 1 0-9l26.983-27.008a6.336 6.336 0 0 1 4.498-1.869c1.626 0 3.252.622 4.498 1.87l26.986 27.006a6.353 6.353 0 0 1 0 9l-9.11 9.117 2.136 2.138a3.171 3.171 0 0 0 4.498 0l13.49-13.504a3.177 3.177 0 0 0 .046-4.453l.002-.002-.047-.048-24.737-24.754 4.498-4.5a6.344 6.344 0 0 1 8.996 0l26.983 27.006a6.347 6.347 0 0 1 1.847 3.98zm-46.707-4.095l-2.362 2.364a3.178 3.178 0 0 0 0 4.501l2.362 2.364 2.361-2.364a3.178 3.178 0 0 0 0-4.501l-2.361-2.364z"></path>
                                </defs>
                                <g fill="none" fill-rule="evenodd">
                                    <path fill="currentColor" fill-rule="nonzero" d="M39.252 80.385c-13.817 0-21.06-8.915-21.06-22.955V13.862H.81V.936h33.762V58.1c0 6.797 4.346 9.026 9.026 9.026 2.563 0 5.237-.446 8.58-1.783l3.677 12.034c-5.794 1.894-9.694 3.009-16.603 3.009zM164.213 99.55V23.78h13.372l1.225 5.571h.335c4.457-4.011 10.585-6.908 16.491-6.908 13.817 0 22.174 11.031 22.174 28.08 0 18.943-11.588 29.863-23.957 29.863-4.903 0-9.694-2.117-13.594-6.017h-.446l.78 9.025V99.55h-16.38zm25.852-32.537c6.128 0 10.92-4.903 10.92-16.268 0-9.917-3.232-14.932-10.14-14.932-3.566 0-6.797 1.56-10.252 5.126v22.397c3.12 2.674 6.686 3.677 9.472 3.677zm69.643 13.372c-17.272 0-30.643-10.586-30.643-28.972 0-18.163 13.928-28.971 28.748-28.971 17.049 0 26.075 11.477 26.075 26.52 0 3.008-.558 6.017-.78 7.354h-37.663c1.56 8.023 7.465 11.589 16.491 11.589 5.014 0 9.36-1.337 14.263-3.9l5.46 9.917c-6.351 4.011-14.597 6.463-21.951 6.463zm-1.338-45.463c-6.462 0-11.031 3.454-12.702 10.363h23.622c-.78-6.797-4.568-10.363-10.92-10.363zm44.238 44.126V23.779h13.371l1.337 12.034h.334c5.46-9.025 13.595-13.371 22.398-13.371 4.902 0 7.465.78 10.697 2.228l-3.343 13.706c-3.454-1.003-5.683-1.56-9.806-1.56-6.797 0-13.928 3.566-18.608 13.483v28.749h-16.38z"></path>
                                    <use class="fill-warning" xlink:href="#a"></use>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <!-- /.top-bar-brand -->
                    <!-- .top-bar-list -->
                    <div class="top-bar-list">
                        <!-- .top-bar-item -->
                        <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
                            <!-- toggle menu -->
                            <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
                            <!-- /toggle menu -->
                        </div>
                        <!-- /.top-bar-item -->
                        <!-- .top-bar-item -->
                        <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
                            <!-- .btn-account -->
                            <div class="dropdown d-none d-md-flex">
                                <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="user-avatar user-avatar-md">
                                        <img src="{{ URL::to('assets/images/avatars', Auth::user()->avatars) }}" alt="">
                                    </span>
                                    <span class="account-summary pr-lg-4 d-none d-lg-block">
                                        <span class="account-name">{{ Auth::user()->name }}</span>
                                        <span class="account-description">{{ Auth::user()->type }}</span>
                                    </span>
                                </button>
                                <!-- .dropdown-menu -->
                                <div class="dropdown-menu">
                                    <div class="dropdown-arrow d-lg-none" x-arrow=""></div>
                                    <div class="dropdown-arrow ml-3 d-none d-lg-block"></div>
                                    <h6 class="dropdown-header d-none d-md-block d-lg-none"> {{ Auth::user()->name }} </h6>
                                    <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#changePasswordModal">
                                        <span class="dropdown-icon oi oi-cog"></span> Change Password
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <span class="dropdown-icon oi oi-account-logout"></span> Logout
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </a>
                                </div>
                                <!-- /.dropdown-menu -->
                            </div>
                            <!-- /.btn-account -->
                        </div>
                        <!-- /.top-bar-item -->
                    </div>
                    <!-- /.top-bar-list -->
                </div>
                <!-- /.top-bar -->
            </header>
            <!-- /.app-header -->
            <!-- .app-aside -->
            <aside class="app-aside app-aside-expand-md app-aside-light">
                <!-- .aside-content -->
                <div class="aside-content">
                    <!-- .aside-header -->
                    <header class="aside-header d-block d-md-none">
                        <!-- .btn-account -->
                        <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside">
                            <span class="user-avatar user-avatar-lg">
                                <img src="{{ URL::to('assets/images/avatars', Auth::user()->avatars) }}" alt="">
                            </span>
                            <span class="account-icon">
                                <span class="fa fa-caret-down fa-lg"></span>
                            </span>
                            <span class="account-summary">
                                <span class="account-name">{{ Auth::user()->name }}</span>
                                <span class="account-description">{{ Auth::user()->type }}</span>
                            </span>
                        </button>
                        <!-- /.btn-account -->
                        <!-- .dropdown-aside -->
                        <div id="dropdown-aside" class="dropdown-aside collapse">
                            <!-- dropdown-items -->
                            <div class="pb-3">
                                <a class="dropdown-item" href="javascript:;" data-toggle="modal" data-target="#changePasswordModal">
                                    <span class="dropdown-icon oi oi-cog"></span> Change Password
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <span class="dropdown-icon oi oi-account-logout"></span> Logout
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </a>
                            </div>
                            <!-- /dropdown-items -->
                        </div>
                        <!-- /.dropdown-aside -->
                    </header>
                    <!-- /.aside-header -->
                    <!-- .aside-menu -->
                    <div class="aside-menu overflow-hidden">
                        <!-- .stacked-menu -->
                        <nav id="stacked-menu" class="stacked-menu">
                            <!-- .menu -->
                            <ul class="menu">
                                <!-- .menu-item -->
                                <li class="menu-item {{ Request::is('administrator/main/dashboard') ? 'has-active' : '' }}">
                                    <a href="{{ route('dashboard') }}" class="menu-link">
                                        <span class="menu-icon fas fa-home"></span>
                                        <span class="menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <!-- /.menu-item -->
                                <!-- .menu-item -->
                                <li class="menu-item has-child {{ Request::is('administrator/main/post*') ? 'has-active' : '' }}">
                                    <a href="#" class="menu-link">
                                        <span class="menu-icon fas fa-folder-open"></span>
                                        <span class="menu-text">Post</span>
                                    </a>
                                    <!-- child menu -->
                                    <ul class="menu">
                                        <li class="menu-item {{ Request::is('administrator/main/post/insert-post') ? 'has-active' : '' }}">
                                            <a href="{{ route('insert.article') }}" class="menu-link">Insert Post</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="auth-comingsoon-v2.html" class="menu-link">List All Post</a>
                                        </li>
                                    </ul>
                                    <!-- /child menu -->
                                </li>
                                <!-- /.menu-item -->
                                @can('isAdmin')
                                <!-- .menu-item -->
                                <li class="menu-item has-child {{ Request::is('administrator/main/category*') ? 'has-active' : '' }}">
                                    <a href="#" class="menu-link">
                                        <span class="menu-icon fa fa-list-alt"></span>
                                        <span class="menu-text">Category</span>
                                    </a>
                                    <!-- child menu -->
                                    <ul class="menu">
                                        <li class="menu-item {{ Request::is('administrator/main/category/cate*') ? 'has-active' : '' }}">
                                            <a href="{{ route('category') }}" class="menu-link">Main Category</a>
                                        </li>
                                        <li class="menu-item {{ Request::is('administrator/main/category/subcate*') ? 'has-active' : '' }}">
                                            <a href="{{ route('subcate') }}" class="menu-link">Sub Category</a>
                                        </li>
                                    </ul>
                                    <!-- /child menu -->
                                </li>
                                <!-- /.menu-item -->
                                <!-- .menu-item -->
                                <li class="menu-item {{ Request::is('administrator/main/user*') ? 'has-active' : '' }}">
                                    <a href="{{ route('user') }}" class="menu-link">
                                        <span class="menu-icon fas fa-users"></span>
                                        <span class="menu-text">User</span>
                                    </a>
                                </li>
                                <!-- /.menu-item -->
                                @endcan
                            </ul>
                            <!-- /.menu -->
                        </nav>
                        <!-- /.stacked-menu -->
                    </div>
                    <!-- /.aside-menu -->
                    <!-- Skin changer -->
                    <footer class="aside-footer border-top p-2">
                        <button class="btn btn-light btn-block text-primary" data-toggle="skin">
                            <span class="d-compact-menu-none">Night mode</span>
                            <i class="fas fa-moon ml-1"></i>
                        </button>
                    </footer>
                    <!-- /Skin changer -->
                </div>
                <!-- /.aside-content -->
            </aside>
            <!-- /.app-aside -->
            <!-- .app-main -->
            <main class="app-main">
                <!-- .wrapper -->
                <div class="wrapper">
                    <!-- .page -->
                    <div class="page">
                        <!-- .page-inner -->
                        <div class="page-inner">
                            @yield('content')
                        </div>
                        <!-- /.page-inner -->
                    </div>
                    <!-- /.page -->
                </div>
                <!-- /.wrapper -->
                <!-- .app-footer -->
                <footer class="app-footer">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-muted" href="#">Support</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="#">Help Center</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="#">Privacy</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted" href="#">Terms of Service</a>
                        </li>
                    </ul>
                    <div class="copyright"> Copyright © 2021. All right reserved. </div>
                </footer>
                <!-- /.app-footer -->
                <!-- Change Password Modal -->
                <div class="modal fade" id="changePasswordModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="ChangePasswordLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ChangePasswordModalLabel">Change Password</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="{{ route('password.change') }}" id="ChangePasswordForm">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Current Password">Current Password</label>
                                        <input type="password" name="current-password" class="form-control" autocomplete="off" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="New Password">New Password</label>
                                        <input type="password" name="new-password" class="form-control" autocomplete="off" autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                        <label for="Confirm New Password">Confirm New Password</label>
                                        <input type="password" name="new-password-confirm" class="form-control" autocomplete="off" autocomplete="new-password-confirm">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Change Password Modal -->
            </main>
            <!-- /.app-main -->
        </div>
        <!-- /.app -->

        <!-- BEGIN BASE JS -->
        <script src="{{ URL::to('assets/jquery/jquery.min.js') }}"></script>
        <script src="{{ URL::to('assets/popper.js/umd/popper.min.js') }}"></script>
        <script src="{{ URL::to('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        <script src="{{ URL::to('assets/stacked-menu/js/stacked-menu.min.js') }}"></script>
        {!! Toastr::message() !!}
        <!-- /BEGIN BASE JS -->

        <!-- BEGIN THEME JS -->
        <script src="{{ URL::to('assets/js/theme.min.js') }}"></script>
        <!-- END THEME JS -->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag()
            {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-116692175-1');
        </script>
        <!-- /Global site tag (gtag.js) - Google Analytics -->

        @yield('script')
    </body>
</html>
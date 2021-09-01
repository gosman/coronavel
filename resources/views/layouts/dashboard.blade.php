<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{config('app.name')}}</title>
        <link rel="stylesheet" href="/assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="/assets/vendors/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="/assets/vendors/owl-carousel-2/owl.carousel.min.css">
        <link rel="stylesheet" href="/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="{{mix('assets/css/app.css')}}">
        <link rel="shortcut icon" href="/assets/images/favicon.ico"/>
    </head>
    <body>
        <div class="container-scroller">

            @include('partials.sidebar')

            <div class="container-fluid page-body-wrapper">
                <nav class="navbar p-0 fixed-top d-flex flex-row">
                    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo-mini" href="/">
                            <img src="/assets/images/logo-mini.svg" alt="logo"/>
                        </a>
                    </div>
                    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                            <span class="mdi mdi-menu"></span>
                        </button>
                        <ul class="navbar-nav w-100">
                            <li class="nav-item w-100">
                                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" method="get" action="search">
                                    <input type="text" class="form-control" name="q" placeholder="SEARCH">
                                </form>
                            </li>
                        </ul>
                        <ul class="navbar-nav navbar-nav-right">
                            <li class="nav-item dropdown">
                                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                    <div class="navbar-profile">
                                        <p class="mb-0 d-none d-sm-block navbar-profile-name">{{$name ?? auth()->user()->name}}</p>
                                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                    <h6 class="p-3 mb-0">Profile</h6>
                                    <div class="dropdown-divider"></div>
                                    <a href="/profile-settings" class="dropdown-item preview-item">
                                        <div class="preview-thumbnail">
                                            <div class="preview-icon bg-dark rounded-circle">
                                                <i class="mdi mdi-settings text-success"></i>
                                            </div>
                                        </div>
                                        <div class="preview-item-content">
                                            <p class="preview-subject mb-1">Settings</p>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <a onclick="$(this).closest('form').submit()" class="dropdown-item preview-item">
                                            <div class="preview-thumbnail">
                                                <div class="preview-icon bg-dark rounded-circle">
                                                    <i class="mdi mdi-logout text-danger"></i>
                                                </div>
                                            </div>
                                            <div class="preview-item-content">
                                                <p class="preview-subject mb-1">Logout</p>
                                            </div>
                                        </a>
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                            <span class="mdi mdi-format-line-spacing"></span>
                        </button>
                    </div>
                </nav>
                <div class="main-panel">
                    <div class="content-wrapper">

                        @yield('content')

                    </div>
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © {{config('app.name')}} {{date('Y')}}</span>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <script src="/assets/vendors/js/vendor.bundle.base.js"></script>
        <script src="/assets/vendors/chart.js/Chart.min.js"></script>
        <script src="/assets/vendors/progressbar.js/progressbar.min.js"></script>
        <script src="/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
        <script src="/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
        <script src="/assets/js/off-canvas.js"></script>
        <script src="/assets/js/hoverable-collapse.js"></script>
        <script src="/assets/js/misc.js"></script>
        <script src="/assets/js/settings.js"></script>
        <script src="/assets/js/todolist.js"></script>
        <script src="/assets/js/dashboard.js"></script>
        <script src="/assets/vendors/sweetalert2/sweetalert2@11.js"></script>
        <script src="{{mix('assets/js/app.js')}}"></script>
        @stack('scripts')
    </body>
</html>

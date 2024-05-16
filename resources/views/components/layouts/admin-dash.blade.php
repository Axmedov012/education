<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - SEO Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('admin2/assets/images/icon/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('admin2/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin2/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin2/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin2/assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('admin2/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin2/assets/css/slicknav.min.css')}}">
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('admin2/assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('admin2/assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('admin2/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('admin2/assets/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('admin2/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

      <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- preloader area end -->
        <!-- page container area start -->
        <div class="page-container">
            <!-- sidebar menu area start -->
            <div class="sidebar-menu">
                <div class="sidebar-header">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('admin2/assets/images/icon/logo.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="main-menu">
                    <div class="menu-inner">
                        <nav>
                            <ul class="metismenu" id="menu">
                                <li class="active">
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Cource</span></a>
                                    <ul class="collapse">
                                       <li class="active"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                        <li><a href="{{route('allCourcePage')}}">All Cource</a></li>
                                        <li><a href="{{route('addCourcePage')}}">Add Cource</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i>
                                        <span> News </span>
                                    </a>
                                    <ul class="collapse">
                                        <li><a href="{{route('allNewsPage')}}">AllNews</a></li>
                                        <li><a href="{{route('addNewsPage')}}">AddNews</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i>
                                        <span> Teacher </span>
                                    </a>
                                    <ul class="collapse">
                                        <li><a href="{{route('allTeacherPage')}}">AllTeacher</a></li>
                                        <li><a href="{{route('addTeacherPage')}}">AddTeacher</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i>
                                        <span> User </span>
                                    </a>
                                    <ul class="collapse">
                                        <li><a href="{{route('allUserPage')}}">AllUser</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i>
                                        <span> Application</span>
                                    </a>
                                    <ul class="collapse">
                                        <li><a href="{{route('answer.index')}}">All Application</a></li>
                                    </ul>
                                </li>

                    </div>
                </div>
            </div>

        <!-- sidebar menu area end -->

        <!-- main content area start -->
            <div class="main-content">
                <!-- header area start -->
                <div class="header-area">
                    <div class="row align-items-center">
                        <!-- nav and search button -->
                        <div class="col-md-6 col-sm-8 clearfix">
                            <div class="nav-btn pull-left">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="search-box pull-left">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search..." required>
                                    <i class="ti-search"></i>
                                </form>
                            </div>
                        </div>

                        <!-- profile info & task notification -->
                        <div class="col-md-6 col-sm-4 clearfix">
                            <ul class="notification-area pull-right">
                                <li id="full-view"><i class="ti-fullscreen"></i></li>
                                <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                                <li class="dropdown">
                                    <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                        <span>2</span>
                                    </i>
                                    <div class="dropdown-menu bell-notify-box notify-box">
                                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                        <div class="nofity-list">
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                                <div class="notify-text">
                                                    <p>You have Changed Your Password</p>
                                                    <span>Just Now</span>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                    <div class="dropdown-menu notify-box nt-enveloper-box">
                                        <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                        <div class="nofity-list">
                                            <a href="#" class="notify-item">
                                                <div class="notify-thumb">
                                                    <img src="{{asset('admin2/assets/images/author/author-img1.jpg')}}" alt="image">
                                                </div>
                                                <div class="notify-text">
                                                    <p>Aglae Mayer</p>
                                                    <span class="msg">Hey I am waiting for you...</span>
                                                    <span>3:15 PM</span>
                                                </div>

                                        </div>
                                    </div>
                                </li>

                                <li class="settings-btn">
                                    <i class="ti-settings"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>




{{ $slot }}

         <!-- jquery latest version -->
    <script src="{{asset('admin2/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset('admin2/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('admin2/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin2/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin2/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin2/assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin2/assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- others plugins -->
    <script src="{{asset('admin2/assets/js/plugins.js')}}"></script>
    <script src="{{asset('admin2/assets/js/scripts.js')}}"></script>
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Afya Plug') }}</title>

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/bootstrap/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/daterangepicker.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/fontawesome.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/footable.standalone.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/fullcalendar@5.2.0.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/jquery-jvectormap-2.0.5.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/jquery.mCustomScrollbar.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/leaflet.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/line-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/MarkerCluster.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/MarkerCluster.Default.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/select2.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/slick.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/star-rating-svg.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/trumbowyg.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/vendor_assets/css/wickedpicker.min.css')}}">

    <link rel="stylesheet" href="{{asset('style.css')}}">
    
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-img.png')}}">
</head>
<body class="layout-light side-menu overlayScroll">
    <div class="mobile-search">
        <form class="search-form">
            <span data-feather="search"></span>
            <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
        </form>
    </div>

    <div class="mobile-author-actions"></div>
    <header class="header-top">
        <nav class="navbar navbar-light">
            <div class="navbar-left">
                <a href="" class="sidebar-toggle">
                    <img class="svg" src="{{asset('img/svg/bars.svg')}}" alt="img"></a>
                <a class="navbar-brand" href="#"><img class="dark" src="{{asset('img/logo_text.png')}}" alt="svg"><img class="light" src="{{asset('img/logo_text.png')}}" alt="img"></a>
                <form action="/" class="search-form">
                    <span data-feather="search"></span>
                    <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
                </form>
            </div>
            <!-- ends: navbar-left -->

            <div class="navbar-right">
                <ul class="navbar-right__menu">
                    <li class="nav-search d-none">
                        <a href="#" class="search-toggle">
                            <i class="la la-search"></i>
                            <i class="la la-times"></i>
                        </a>
                        <form action="/" class="search-form-topMenu">
                            <span class="search-icon" data-feather="search"></span>
                            <input class="form-control mr-sm-2 box-shadow-none" type="text" placeholder="Search...">
                        </form>
                    </li>
                    <li class="nav-message">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="mail"></span></a>
                            <div class="dropdown-wrapper">
                                <h2 class="dropdown-wrapper__title">Messages <span class="badge-circle badge-success ml-1">2</span></h2>
                                <ul>
                                    <li class="author-online has-new-message">
                                        <div class="user-avater">
                                            <img src="img/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                                <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="author-offline has-new-message">
                                        <div class="user-avater">
                                            <img src="img/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                                <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="author-online has-new-message">
                                        <div class="user-avater">
                                            <img src="img/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                                <span class="msg-count badge-circle badge-success badge-sm">1</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="author-offline">
                                        <div class="user-avater">
                                            <img src="img/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="author-offline">
                                        <div class="user-avater">
                                            <img src="img/team-1.png" alt="">
                                        </div>
                                        <div class="user-message">
                                            <p>
                                                <a href="" class="subject stretched-link text-truncate" style="max-width: 180px;">Web Design</a>
                                                <span class="time-posted">3 hrs ago</span>
                                            </p>
                                            <p>
                                                <span class="desc text-truncate" style="max-width: 215px;">Lorem ipsum
                                                    dolor amet cosec Lorem ipsum</span>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <a href="" class="dropdown-wrapper__more">See All Message</a>
                            </div>
                        </div>
                    </li>
                    <!-- ends: nav-message -->
                    <li class="nav-notification">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle">
                                <span data-feather="bell"></span></a>
                            <div class="dropdown-wrapper">
                                <h2 class="dropdown-wrapper__title">Notifications <span class="badge-circle badge-warning ml-1">{{count(Auth::user()->unreadNotifications)}}</span></h2>
                                <ul>
                                    @foreach(Auth::user()->unreadNotifications as $item)
                                    @if ($item->data['type'] == 'new_user')
                                    <li class="nav-notification__single nav-notification__single--unread d-flex flex-wrap">
                                        <div class="nav-notification__type nav-notification__type--primary">
                                            <span data-feather="{{$item->data['icon']}}"></span>
                                        </div>
                                        <div class="nav-notification__details">
                                            <a href="{{route('users.markNotification', $item->id)}}">
                                                <a href="{{route('users.markNotification', $item->id)}}" class="subject stretched-link text-truncate" style="max-width: 180px;">{{$item->data['name']}}</a>
                                                <span>has created an account.</span>
                                            </a>
                                            <p>
                                                <span class="time-posted">{{$item->created_at}}</span>
                                            </p>
                                        </div>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- ends: .nav-notification -->
                    <li class="nav-author">
                        <div class="dropdown-custom">
                            <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('img/author-nav.jpg')}}" alt="" class="rounded-circle"></a>
                            <div class="dropdown-wrapper">
                                <div class="nav-author__info">
                                    <div class="author-img">
                                        <img src="{{asset('storage/users-avatar/'. Auth::user()->avatar)}}" alt="" class="rounded-circle">
                                    </div>
                                    <div>
                                        <h6>{{ Auth::user()->name }}</h6>
                                        <span class=" mt-1 bg-opacity-success  color-success rounded-pill userDatatable-content-status active">Administrator</span>
                                    </div>
                                </div>
                                <div class="nav-author__options">
                                    <ul>
                                        <li>
                                            <a href="{{route('users.profile')}}">
                                                <span data-feather="user"></span> Profile</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="settings"></span> Settings</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="key"></span> Billing</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="users"></span> Activity</a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span data-feather="bell"></span> Help</a>
                                        </li>
                                    </ul>
                                    <a href="" class="nav-author__signout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span data-feather="log-out"></span> Sign Out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <!-- ends: .dropdown-wrapper -->
                        </div>
                    </li>
                    <!-- ends: .nav-author -->
                </ul>
                <!-- ends: .navbar-right__menu -->
                <div class="navbar-right__mobileAction d-md-none">
                    <a href="#" class="btn-search">
                        <span data-feather="search"></span>
                        <span data-feather="x"></span></a>
                    <a href="#" class="btn-author-action">
                        <span data-feather="more-vertical"></span></a>
                </div>
            </div>
            <!-- ends: .navbar-right -->
        </nav>
    </header>
    <main class="main-content">

        <aside class="sidebar-wrapper">
            <div class="sidebar sidebar-collapse" id="sidebar">
                <div class="sidebar__menu-group">
                    <ul class="sidebar_nav">
                        <li class="menu-title">
                            <span>Main menu</span>
                        </li>
                        <li>
                            <a href="{{route('users.profile')}}" class="">
                                <span data-feather="user" class="nav-icon"></span>
                                <span class="menu-text">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="/chatify" class="">
                                <span data-feather="message-square" class="nav-icon"></span>
                                <span class="menu-text">Chat</span>
                            </a>
                        </li>
                        <li class="has-child">
                            <a href="#">
                                <span data-feather="dollar-sign" class="nav-icon"></span>
                                <span class="menu-text">Accounting</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="">Bank Accounts</a>
                                </li>
                                <li>
                                    <a class="" href="{{route('accounting.accounts')}}">Accounts (COA)</a>
                                </li>                        
                                <li class="has-child">
                                    <a href="#">
                                        <span class="menu-text">Setup</span>
                                        <span class="toggle-icon"></span>
                                    </a>
                                    <ul>        
                                        <li>
                                            <a class="" href="{{route('accounting.settings.currency')}}">Currencies</a>
                                        </li>
                                        <li>
                                            <a class="" href="{{route('accounting.settings.vat')}}">VAT Rates</a>
                                        </li>
                                        <li class="">
                                            <a class="" href="{{route('accounting.settings.period')}}">Accounting Periods</a>
                                        </li>    
                                        <li>
                                            <a class="" href="{{route('accounting.settings.categories')}}">Account Categories</a>
                                        </li>                            
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="bell" class="nav-icon"></span>
                                <span class="menu-text">Notifications</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="{{route('notifications.sms')}}">SMS Messages</a>
                                </li>
                                <li>
                                    <a class="" href="{{route('notifications.emails')}}">Email Messages</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="users" class="nav-icon"></span>
                                <span class="menu-text">Staff Management</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="{{route('users.staff.pending')}}">Pending Requests</a>
                                </li>
                                <li>
                                    <a class="" href="{{route('users.staff.open')}}">Open Requests</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="lock" class="nav-icon"></span>
                                <span class="menu-text">Identity Management</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="{{route('users.index')}}">Users</a>
                                </li>
                                <li>
                                    <a class="" href="{{route('roles.index')}}">Roles</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-child">
                            <a href="#" class="">
                                <span data-feather="settings" class="nav-icon"></span>
                                <span class="menu-text">Settings</span>
                                <span class="toggle-icon"></span>
                            </a>
                            <ul>
                                <li>
                                    <a class="" href="{{route('company.profile')}}">Company Details</a>
                                </li>
                                <li>
                                    <a class="" href="{{route('products.index')}}">Products</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>

        <div class="contents">

            <div class="container-fluid">
              @yield('content')
            </div>

        </div>
        <footer class="footer-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-copyright">
                            <p>2023 @<a href="#">Afya Plug</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-menu text-right">
                            <ul>
                               
                            </ul>
                        </div>
                        <!-- ends: .Footer Menu -->
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <div id="overlayer">
        <span class="loader-overlay">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="{{asset('img/app_logo.png')}}" alt="" srcset="">
                </div>
                <div class="col-12 mt-2 text-center">
                    <div class="atbd-spin-dots spin-lg">
                        <span class="spin-dot badge-dot dot-primary"></span>
                        <span class="spin-dot badge-dot dot-primary"></span>
                        <span class="spin-dot badge-dot dot-primary"></span>
                        <span class="spin-dot badge-dot dot-primary"></span>
                    </div>
                </div>
            </div>       
        </span>
    </div>
    
    <div class="overlay-dark-sidebar"></div>

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDduF2tLXicDEPDMAtC6-NLOekX0A5vlnY"></script>
    <script src="{{asset('assets/vendor_assets/js/jquery/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/jquery/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/bootstrap/popper.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/moment/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/accordion.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/autoComplete.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/charts.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/daterangepicker.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/drawer.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/dynamicBadge.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/dynamicCheckbox.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/feather.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/footable.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/fullcalendar@5.2.0.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/google-chart.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/jquery-jvectormap-2.0.5.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/jquery.filterizr.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/jquery.mCustomScrollbar.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/jquery.star-rating-svg.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/leaflet.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/leaflet.markercluster.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/loader.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/message.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/moment.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/muuri.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/notification.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/popover.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/trumbowyg.min.js')}}"></script>
    <script src="{{asset('assets/vendor_assets/js/wickedpicker.min.js')}}"></script>
    <script src="{{asset('assets/theme_assets/js/drag-drop.js')}}"></script>
    <script src="{{asset('assets/theme_assets/js/footable.js')}}"></script>
    <script src="{{asset('assets/theme_assets/js/full-calendar.js')}}"></script>
    <script src="{{asset('assets/theme_assets/js/googlemap-init.js')}}"></script>
    <script src="{{asset('assets/theme_assets/js/icon-loader.js')}}"></script>
    <script src="{{asset('assets/theme_assets/js/jvectormap-init.js')}}"></script>
    <script src="{{asset('assets/theme_assets/js/leaflet-init.js')}}"></script>
    <script src="{{asset('assets/theme_assets/js/main.js')}}"></script>

</body>
</html>

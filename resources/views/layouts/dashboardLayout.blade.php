<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ URL::asset('styleDash/images/icons/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ URL::asset('styleDash/images/icons/favicon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('styleDash/images/icons/favicon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('styleDash/images/icons/favicon-114x114.png') }}">
    <!-- Favicons -->
   <link href="{{ URL::asset('img/favicon.png') }}" rel="icon">
   <link href="{{ URL::asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">


   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styleDash/styles/jquery-ui-1.10.4.custom.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styleDash/styles/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styleDash/styles/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styleDash/styles/animate.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styleDash/styles/all.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styleDash/styles/main.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styleDash/styles/style-responsive.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styleDash/styles/zabuto_calendar.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styleDash/styles/pace.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styleDash/styles/jquery.news-ticker.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styleDash/styles/jplist-custom.css') }}">

</head>
<body>
    <div>
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="{{ url('/') }}" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">{{ config('app.name', 'Nias PulauWisata') }}</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>

                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control text-white"/></div>
                </form>

                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><i class="fa fa-user"></i>&nbsp;<span class="hidden-xs">Admin</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                          <li><a class="ion-ios-log-out" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                  Logout
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
      
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">

                    <div class="clearfix"></div>
                    <li class="{{Request::is("dashboard")?'active':''}}"><a href="/dashboard"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Dashboard</span></a></li>
                    <li class="{{Request::is("dashboard/userControl")?'active':''}}"><a href="/dashboard/userControl"><i class="fa fa-user fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">User Control</span></a>
                    </li>
                    <li class="{{Request::is("dashboard/postcontrol")?'active':'' || Request::is("dashboard/postbudaya")?'active':'' || Request::is("dashboard/posttransportasi")?'active':'' || Request::is("dashboard/postkuliner")?'active':'' || Request::is("dashboard/postacaradanfestival")?'active':''}}"><a href="/dashboard/postcontrol"><i class="fa fa-send-o fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Post Control</span></a>
                    </li>
                    <li class="{{Request::is("dashboard/makepost")?'active':''}}"><a href="/dashboard/makepost"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Make Post</span></a>
                    </li>
                    <li class="{{Request::is("dashboard/training")?'active':'' || Request::is("dashboard/traininguser")?'active':'' || Request::is("dashboard/trainingitem")?'active':''}}"><a href="/dashboard/training"><i class="fa fa-desktop fa-fw">
                        <div class="icon-bg bg-blue"></div>
                        </i><span class="menu-title">Training</span></a>
                    </li>
                    <li class="{{Request::is("dashboard/kamus")?'active':''}}"><a href="/dashboard/kamus"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Kamus</span></a>
                    </li>
                    <li class="{{Request::is("dashboard/inbox")?'active':''}}"><a href="/dashboard/inbox"><i class="fa fa-file-o fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i><span class="menu-title">Inbox</span></a>
                    </li>
                    <li class="{{Request::is("dashboard/adminsetting")?'active':''}}"><a href="/dashboard/adminsetting"><i class="fa fa-rocket fa-fw">
                        <div class="icon-bg bg-yellow"></div>
                    </i><span class="menu-title">Admin Setting</span></a>
                    </li>
                    <li><a href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-key fa-fw">
                        <div class="icon-bg bg-grey"></div>
                    </i><span class="menu-title">Logout</span></a>
                    </li>
                </ul>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->

                <!--==========================
                    Content
                ============================-->
                @yield('content')

                <script src="{{ URL::asset('styleDash/script/jquery-1.10.2.min.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jquery-migrate-1.2.1.min.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jquery-ui.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/bootstrap.min.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/bootstrap-hover-dropdown.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/html5shiv.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/respond.min.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jquery.metisMenu.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jquery.slimscroll.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jquery.cookie.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/icheck.min.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/custom.min.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jquery.news-ticker.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jquery.menu.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/pace.min.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/holder.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/responsive-tabs.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jquery.flot.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jquery.flot.categories.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jquery.flot.pie.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jquery.flot.tooltip.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jquery.flot.resize.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jquery.flot.fillbetween.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jquery.flot.stack.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jquery.flot.spline.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/zabuto_calendar.min.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/index.js') }}"></script>
                <!--LOADING SCRIPTS FOR CHARTS-->
                <script src="{{ URL::asset('styleDash/script/highcharts.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/data.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/drilldown.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/exporting.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/highcharts-more.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/charts-highchart-pie.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/charts-highchart-more.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/modernizr.min.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jplist.min.js') }}"></script>
                <script src="{{ URL::asset('styleDash/script/jplist.js') }}"></script>

                <!--CORE JAVASCRIPT-->
                <script src="{{ URL::asset('styleDash/script/main.js') }}"></script>
                <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                <script src="http://maps.googleapis.com/maps/api/js?libraries=places"type="text/javascript"></script>
                @yield('js')
    </body>
</html>

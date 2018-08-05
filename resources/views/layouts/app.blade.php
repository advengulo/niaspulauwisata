<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'NiasPulauWisata') }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ URL::asset('img/favicon.png') }}" rel="icon">
  <link href="{{ URL::asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ URL::asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ URL::asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div style="float : right;">
            <ul class="nav-menu">

            </ul>
        </div>

    </div>
  <!--==========================
    Header
  ============================-->
  <header id="header" style="background: rgba(0, 0, 0, 0.9);  padding: 20px 0;  height: 72px; position:absolute; margin-top:0px;">
    <div class="container-fluid">
      <div id="logo" class="pull-left">
        <h1><a href="{{ url('/') }}" class="scrollto">
          {{ config('app.name', 'NiasPulauWisata') }}
        </a></h1>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          @guest
                <li><a href="{{ route('login') }}" >Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
          @else
                <li class="menu-has-children"><a href="#"> {{ Auth::user()->name }} <span class="caret"> </span></a>
                    <ul>
                        <li><a href="{{ route('logout') }}"
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
          @endguest
        </ul>
      </nav>
    </div>
  </header>

  <!--==========================
    Intro Section
  ============================-->

  <main id="main">
        <section id="services">
            <div class="container">
                <div class="row about-cols" style="margin-top : 60px;">
                    @yield('content')
                </div>
            </div>
        </section>
    </main>

  <!--==========================
    Footer
  ============================-->
  @extends('layouts.footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ URL::asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ URL::asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ URL::asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ URL::asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ URL::asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ URL::asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ URL::asset('lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ URL::asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ URL::asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::asset('lib/lightbox/js/lightbox.min.js') }}"></script>
  <script src="{{ URL::asset('lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ URL::asset('contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ URL::asset('js/main.js') }}"></script>

</body>
</html>

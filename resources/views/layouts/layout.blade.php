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
  <link href="{{ URL::asset('rating/bootstrap.min.css') }}" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet">

  <link type="text/css" rel="stylesheet" href="{{ URL::asset('styleDash/styles/jplist-custom.css') }}">
  <link type="text/css" rel="stylesheet" href="{{ URL::asset('styleDash/styles/jquery.news-ticker.css') }}">
  

<link href="{{ URL::asset('rating/css/bootstrap.css') }}" rel="stylesheet">

<link rel="stylesheet" href="{{ URL::asset('rating/star-rating.min.css') }}" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script src="{{ URL::asset('rating/js/star-rating.js') }}"></script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

<link href="{{ asset('css/preview.css') }}" rel="stylesheet">
</head>

<body>
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="{{ url('/') }}" class="scrollto">
          {{ config('app.name', 'Nias PulauWisata') }}
        </a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="/">Home</a></li>
          <li><a href="/wisata">wisata</a></li>
          <li><a href="/budaya">Budaya</a></li>
          <li class="menu-has-children"><a href="#">Informasi</a>
            <ul>
              <li><a href="/kuliner">Kuliner</a></li>
              <li><a href="/transportasi">Transportasi</a></li>
              <li><a href="/kamus">Kamus</a></li>
              <li><a href="/kontak">Kontak</a></li>
            </ul>
          </li>
          @guest
                <li><a href="{{ route('login') }}" >Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
          @else
                <li class="menu-has-children"><a href="#" style="position:relative; padding-left:50px;">
                    <img src="{{ URL::asset(Auth::user()->avatar) }}" alt="" class="img-avatar-header">
                    {{ Auth::user()->name }}</a>
                    <ul>
                        <li><a href="{{ url('/profile')}}" class="ion-ios-person"> Profil</a></li>
                        <hr>
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
          @endguest
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Content
  ============================-->
  @yield('content')
  <!--==========================
    Footer
  ============================-->
  @extends('layouts.footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- JavaScript Libraries -->
  <script src="http://maps.googleapis.com/maps/api/js"></script>
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
  <script src="{{ URL::asset('styleDash/script/jplist.min.js') }}"></script>
  <script src="{{ URL::asset('styleDash/script/jplist.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ URL::asset('contactform/contactform.js') }}"></script>
  <script src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>

@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="{{ URL::asset('img/intro/sampulkamus.jpg') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>K A M U S</h2>
              </div>
            </div>
          </div>
        </div>
  </section><!-- #intro -->

  <!--==========================
    Skills Section
  ============================-->
  <section id="skills">
    <div class="container">

      <header class="section-header">
        <h3>Our Skills</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
      </header>

      <div class="row contact-info">

        <div class="col-md-4">
          <nav>
            <ul class="list-kamus">
              <li><a href="#">Home</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">About</a></li>
            </ul>
          </nav>
        </div>

        <div class="col-md-8">
          <div class="contact-phone">
            <i class="ion-ios-telephone-outline"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
          </div>
        </div>

      </div>

    </div>
  </section>
@endsection

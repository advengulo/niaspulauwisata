@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="{{ URL::asset('img/intro/sampultransportasi.jpg') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>T R A N S P O R T A S I</h2>
              </div>
            </div>
          </div>
        </div>
  </section><!-- #intro -->

  <main id="main">
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">
        <div class="owl-carousel testimonials-carousel">

          @foreach($data as $transportasi)
          <div class="testimonial-item">
            <img src="{{ $transportasi->transportasi_gambar }}" class="testimonial-img" alt="">
            <h3>{{$transportasi->transportasi_name}}</h3>
            <h4>{{$transportasi->transportasi_jenis}}</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              {!! $transportasi->artikel['artikel'] !!}
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- #testimonials -->
  </main>
@endsection

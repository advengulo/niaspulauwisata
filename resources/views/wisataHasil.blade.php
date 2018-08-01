@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="{{ URL::asset('img/intro/sampulwisata.jpg') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>WISATA</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">
        <header class="section-header">
          <h4 class="section-title"><strong>Rekomendasi Wisata Untuk Anda</strong></h4>
          </hr>
        </header>
        <div class="row" style="padding-right: 15px; padding-left: 15px;">
          @foreach ($userBased as $wisata)
          <div class="portfolio-wrap-detail col-md-4" style="padding-right: 0; padding-left: 0;">
              <figure>
                <a href="{{ route('wisataDetail', $wisata) }}">
                <img src="{{ URL::asset($wisata->wisata_gambar) }}" class="img-fluid" alt="">
                </a>
              </figure>
              <div class="portfolio-info-detail">
                <div class="rating">
                    <input id="input-1" name="input-1" class="rating" data-min="0" data-max="5" data-step="0.1" value="{{ $wisata->averageRating }}" data-size="xs" disabled="">
                </div>
              </div>
            </div>
            <div class="col-lg-8" style="padding-bottom:10px;">
                <h4><a href="{{ route('wisataDetail', $wisata) }}">{{ $wisata->wisata_name}}</a></h4>
                <p>{!! str_limit ($wisata->artikel['artikel'], 800, ' ...') !!}  <a href="{{ route('wisataDetail', $wisata) }}">Selengkapnya..</a></p>
            </div>
          @endforeach
        </div>
      </div>

      
    </section><!-- #portfolio -->

  </main>
@endsection

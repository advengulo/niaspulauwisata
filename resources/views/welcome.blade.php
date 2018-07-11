@extends('layouts.layout')

@section('content')
<section id="intro">
  <div class="intro-container">
    <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Pulau Asu</h2>
                <a href="#featured-services" class="btn-get-started scrollto">Apakah Anda Memerlukan Rekomendasi Wisata?</a>
              </div>
            </div>
          </div>


        <div class="carousel-item">
          <div class="carousel-background"><img src="img/intro/2.jpg" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2>Hombo Batu</h2>
              <a href="#featured-services" class="btn-get-started scrollto">Apakah Anda Memerlukan Rekomendasi Wisata?</a>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-background"><img src="img/intro/3.jpg" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2>Pantai Sorake</h2>
              <a href="#featured-services" class="btn-get-started scrollto">Apakah Anda Memerlukan Rekomendasi Wisata?</a>
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </div>
</section><!-- #intro -->

<main id="main">

  <!--==========================
    WISATA
  ============================-->
  <section id="portfolio"  class="section-bg" >
    <div class="container">

      <header class="section-header" style="">
        <h3>Destinasi Wisata <a style="text-transform: none; font-size: 16px;" href="/wisata">Selengkapnya..</a></h3>
      </header>
      <div class="row portfolio-container">
        @foreach ($dataWisata as $wisata)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{ URL::asset($wisata->wisata_img) }}" class="img-fluid" alt="">
              <a href="{{ URL::asset($wisata->wisata_img) }}" data-lightbox="portfolio" data-title="{{ $wisata->artikel['artikel_title']}}" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="{{ route('wisataDetail', $wisata) }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>
            <div class="portfolio-info">
              <h4><a href="{{ route('wisataDetail', $wisata) }}">{{ $wisata->artikel['artikel_title']}}</a></h4>
              <img src="{{ URL::asset('img/rating.png') }}" alt="">
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

  <!--==========================
    ACARA DAN FESTIVAL
  ============================-->
  <section id="services">
    <div class="container">

      <header class="section-header" style="">
        <h3>Acara dan Festival <a style="text-transform: none; font-size: 16px;" href="/acaradanfestival">Selengkapnya..</a></h3>
      </header>

      <div class="row portfolio-container">

        @foreach ($dataAcaradanFestival as $acaradanfestival)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" >
          <div class="portfolio-wrap">
            <figure>
                <a href="{{ route('acaradanfestivalDetail', $acaradanfestival) }}"><img src="{{ URL::asset($acaradanfestival->acaradanfestival_img) }}" class="img-fluid" alt=""></a>
            </figure>
            <div class="portfolio-info" style="background-color:black">
              <h4><a href="{{ route('acaradanfestivalDetail', $acaradanfestival) }}">{{ $acaradanfestival->artikel['artikel_title']}}</a></h4>
              <div class="row">
                <div class="col md-5">
                  <i class="ion-android-calendar"> &nbsp{{ $acaradanfestival->acaradanfestival_tanggal}}</i>
                </div>
                <div class="col md-6">
                  <i class="ion-ios-location"> &nbsp{{ $acaradanfestival->acaradanfestival_lokasi}}</i>
                </div>
            </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section>


</main>
@endsection

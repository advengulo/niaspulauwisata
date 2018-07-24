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
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Transportasi di Pulau Nias</h3>
        </header>

        <div class="row portfolio-container">

          @foreach ($data as $transportasi)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ URL::asset($transportasi->transportasi_gambar) }}" class="img-fluid" alt="">
                <a href="{{ URL::asset($transportasi->transportasi_gambar) }}" data-lightbox="portfolio" data-title="{{ $transportasi->transportasi_name}}" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="">{{ $transportasi->transportasi_name}}</a></h4>
                <p>{{ $transportasi->transportasi_jenis}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <div class="pagination justify-content-center" >
          <div class="container">
            <div style="text-align:center;">
              {{ $data->render() }}
            </div>
          </div>
        </div>
    </section><!-- #portfolio -->
  </main>
@endsection

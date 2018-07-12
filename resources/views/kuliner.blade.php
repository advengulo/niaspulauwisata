@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="{{ URL::asset('img/intro/sampulkuliner.jpg') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>K U L I N E R</h2>
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
          <h3 class="section-title">Kuliner Pulau Nias</h3>
        </header>

        <div class="row portfolio-container">

          @foreach ($data as $kuliner)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ URL::asset($kuliner->kuliner_gambar) }}" class="img-fluid" alt="">
                <a href="{{ URL::asset($kuliner->kuliner_gambar) }}" data-lightbox="portfolio" data-title="{{ $kuliner->kuliner_name}}" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{ route('kulinerDetail', $kuliner) }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="{{ route('kulinerDetail', $kuliner) }}">{{ $kuliner->kuliner_name }}</a></h4>
                <p><span class="ion-ios-location"></span> {{ $kuliner->kuliner_lokasi}}</p>
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
      </div>
    </section><!-- #portfolio -->
  </main>
@endsection

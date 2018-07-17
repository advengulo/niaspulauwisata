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
          <h3 class="section-title">Wisata Pulau Nias</h3>
        </header>

        <div class="row portfolio-container">

          @foreach ($data as $wisata)
          <div class="row portfolio-item filter-app wow fadeInUp">
          <div class="col-md-5">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ URL::asset($wisata->wisata_gambar) }}" class="img-fluid" alt="">
                <a href="{{ URL::asset($wisata->wisata_gambar) }}" data-lightbox="portfolio" data-title="{{ $wisata->wisata_name }}" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{ route('wisataDetail', $wisata) }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
              <div class="portfolio-info">
                <h4><a href="{{ route('wisataDetail', $wisata) }}">{{ $wisata->wisata_name}}</a></h4>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <p>{{ str_limit ($wisata->artikel['artikel'], 800, ' ...') }}  <a href="{{ route('wisataDetail', $wisata) }}">Selengkapnya..</a></p>
          </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="container">
        <div style="text-align:center;">
          {{ $data->render() }}
        </div>
      </div>
    </section><!-- #portfolio -->

  </main>
@endsection

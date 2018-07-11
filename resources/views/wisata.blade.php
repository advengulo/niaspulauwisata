@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="{{ URL::asset('img/intro-carousel/sampulbudaya.jpg') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>KEBUDAYAAN</h2>
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
          <div class="row portfolio-item">
          <div class="col-md-5 filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ URL::asset($wisata->wisata_img) }}" class="img-fluid" alt="">
                <a href="{{ URL::asset($wisata->wisata_img) }}" data-lightbox="portfolio" data-title="{{ $wisata->artikel['artikel_title']}}" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{ route('wisataDetail', $wisata) }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
              <div class="portfolio-info">
                <h4><a href="{{ route('wisataDetail', $wisata) }}">{{ $wisata->artikel['artikel_title']}}</a></h4>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <p>{{ str_limit ($wisata->artikel['artikel_content'], 800, ' ...') }}  <a style="text-transform: none; font-size: 16px;" href="/wisata">Selengkapnya..</a></p>
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

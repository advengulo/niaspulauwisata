@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="{{ URL::asset('img/intro/sampulbudaya.jpg') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>K E B U D A Y A A N</h2>
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
          <h3 class="section-title">Budaya Pulau Nias</h3>
        </header>

        <div class="row portfolio-container">

          @foreach ($data as $budaya)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="{{ URL::asset($budaya->budaya_img) }}" class="img-fluid" alt="">
                <a href="{{ URL::asset($budaya->budaya_img) }}" data-lightbox="portfolio" data-title="{{ $budaya->artikel['artikel_title']}}" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="{{ route('budayaDetail', $budaya) }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="{{ route('budayaDetail', $budaya) }}">{{ $budaya->artikel['artikel_title']}}</a></h4>
                <p>{{ $budaya->budaya_lokasi}}</p>
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

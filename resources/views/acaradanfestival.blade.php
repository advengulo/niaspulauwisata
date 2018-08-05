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
                <h2>A C A R A &nbsp&nbspD A N &nbsp&nbspV E S T I V A L</h2>
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
          <h3 class="section-title">ACARA & FESTIVAL YANG AKAN DI SELENGGARAN DI Pulau Nias</h3>
        </header>

        <div class="row portfolio-container">

          @foreach ($dataAcaradanFestival as $acaradanfestival)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" >
            <div class="portfolio-wrap">
              <figure>
                <a href="{{ route('acaradanfestivalDetail', $acaradanfestival) }}"><img src="{{ URL::asset($acaradanfestival->acaradanfestival_gambar) }}" class="img-fluid" alt=""></a>
              </figure>
              <div class="portfolio-info" style="background-color:black">
                <h4><a href="{{ route('acaradanfestivalDetail', $acaradanfestival) }}">{{ $acaradanfestival->acaradanfestival_name}}</a></h4>
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
        <div class="pagination justify-content-center" >
          <div class="container">
            <div style="text-align:center;">
            {{ $dataAcaradanFestival->render() }}
          </div>
          </div>
        </div>
      </div>
    </section><!-- #portfolio -->
  </main>
@endsection

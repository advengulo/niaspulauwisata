@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="{{ URL::asset($acaradanfestival->acaradanfestival_img) }}" alt=""></div>
          </div>
        </div>
  </section><!-- #intro -->

  <main id="main">
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>{{ $acaradanfestival->artikel['artikel_title']}}</h3>
        </header>
        <div class="row about-cols">

          <div class="col-md-3 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="{{ URL::asset($acaradanfestival->acaradanfestival_img) }}" alt="" class="img-fluid">
                <div class="icon"><a href="{{ URL::asset($acaradanfestival->acaradanfestival_img) }}" data-lightbox="portfolio" data-title="{{ $acaradanfestival->artikel['artikel_title']}}" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a></div>
              </div>
            </div>
            <div class="portfolio-info">
              <div class="row">
                <div class="col md-5">
                  <i class="ion-android-calendar"> &nbsp{{ $acaradanfestival->acaradanfestival_tanggal}}</i>
                </div>
                <div class="col md-6" style="text-align:right;">
                  <i class="ion-ios-location" > &nbsp{{ $acaradanfestival->acaradanfestival_lokasi}}</i>
                </div>
            </div>
            </div>
          </div>

          <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <p>{{ $acaradanfestival->artikel['artikel_content']}}</p>
            </div>
          </div>

          <div class="col-md-3 wow fadeInUp">
            <div class="about-col"style="border:2px solid black;color:black; text-align:center;" >
              <h5>Acara dan Festival</h5>
            </div>
            @foreach ($data as $list)
              <li style="list-style-type:none;">
                  <div>
                    <i style="margin-left:10px">{{ str_limit ($list->artikel['artikel_title'], 26, ' ...') }}</i>
                    <div class="col md-4" style="text-align:right;">
                      <i class="ion-android-calendar" > &nbsp{{ $list->acaradanfestival_tanggal}}</i>
                    </div>
                  </div>
              </li>
            @endforeach
          </div>


        </div>

      </div>
    </section><!-- #about -->
  </main>

@endsection

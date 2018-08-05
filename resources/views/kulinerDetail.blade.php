@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="{{ URL::asset($kuliner->kuliner_gambar) }}" alt=""></div>
          </div>
        </div>
  </section><!-- #intro -->

  <section id="about">
    <div class="container">

      <header class="section-header">
        <h3>{{ $kuliner->kuliner_name}}</h3>
        <i class="ion-ios-location"> {{ $kuliner->kuliner_lokasi}}</i>
      </header>
      <p>{!! $kuliner->artikel['artikel'] !!}</p>
    </div>
  </section><!-- #about -->

@endsection

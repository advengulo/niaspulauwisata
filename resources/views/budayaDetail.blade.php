@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="{{ URL::asset($budaya->budaya_gambar) }}" alt=""></div>
          </div>
        </div>
  </section><!-- #intro -->

  <section id="portofolio">
    <div class="container">

      <header class="section-header">
        <h3>{{ $budaya->budaya_name}}</h3>
        <i class="ion-ios-location"> {{ $budaya->budaya_lokasi}}</i>
      </header>
      <p>{{ $budaya->artikel['artikel'] }}</p>
    </div>
  </section><!-- #about -->

@endsection

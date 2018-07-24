@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="{{ URL::asset($transportasi->transportasi_gambar) }}" alt=""></div>
          </div>
        </div>
  </section><!-- #intro -->

  <section id="about">
    <div class="container">

      <header class="section-header">
        <h3>{{ $transportasi->transportasi_name}}</h3>
        <i class="ion-ios-location"> </i>
      </header>
      <p>{{ $transportasi->artikel['artikel']}}</p>
    </div>
  </section><!-- #about -->

@endsection

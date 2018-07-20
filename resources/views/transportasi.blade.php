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
                <a data-toggle="modal" data-target="#exampleModalLong" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
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
        <!-- Modal Transportasi-->
        <div class="modal" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
        </div>
    </section><!-- #portfolio -->
  </main>
@endsection

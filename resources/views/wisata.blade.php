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
                <h2>W I S A T A</h2>
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

        <div class=row style="padding-right: 15px; margin-bottom:15px;">
            <div class="col-md-7">
              <header class="section-header">
                <h3 class="section-title">Wisata Pulau Nias</h3>
              </header>
            </div>
            <div class="col-md-2"> </div>

            <!-- Form Pencarian -->
            <div class="col-md-3" style="padding: 20px 0px 20px 15px">
              <form class="" action="{{ route('cariwisata')}}" method="get">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" name="search" placeholder="Search...">
                    <span class="input-group-btn">
                        <span class="input-group-btn">
					        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Cari</button>
					     </span>
                     </span>
                 </div>
               </form>
            </div>
        </div>
        @if($data->count())
          <div class="row" style="padding-right: 15px; padding-left: 15px;">
              @foreach ($data as $wisata)
              <div class="portfolio-wrap-detail col-md-4" style="padding-right: 0; padding-left: 0;">
                  <figure>
                    <a href="{{ route('wisataDetail', $wisata) }}">
                    <img src="{{ URL::asset($wisata->wisata_gambar) }}" class="img-fluid" alt="">
                    </a>
                  </figure>
                  <div class="portfolio-info-detail">
                    <div class="rating">
                        <input id="input-1" name="input-1" class="rating" data-min="0" data-max="5" data-step="0.1" value="{{ $wisata->averageRating }}" data-size="xs" disabled="">
                    </div>
                  </div>
                </div>
                <div class="col-lg-8" style="padding-bottom:10px;">
                    <h4><a href="{{ route('wisataDetail', $wisata) }}">{{ $wisata->wisata_name}}</a></h4>
                    <p>{!! str_limit ($wisata->artikel['artikel'], 800, ' ...') !!}  <a href="{{ route('wisataDetail', $wisata) }}">Selengkapnya..</a></p>
                </div>
              @endforeach
            </div>
          @else
            <div class="alert alert-warning">
                <i class="fa fa-exclamation-triangle"></i> Wisata tidak tersedia
            </div>
          @endif
      </div>
      <div class="container">
        <div style="text-align:center;">
          {{ $data->render() }}
        </div>
      </div>
    </section><!-- #portfolio -->

  </main>
@endsection

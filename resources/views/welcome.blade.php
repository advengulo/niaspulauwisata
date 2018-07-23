@extends('layouts.layout')

@section('content')
<section id="intro">
  <div class="intro-container">
    <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Pulau Asu</h2>
                <button type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#rekomendasiModal" data-whatever="@mdo">Apakah Anda Memerlukan Rekomendasi Wisata?</button>
              </div>
            </div>
          </div>

        <div class="carousel-item">
          <div class="carousel-background"><img src="img/intro/2.jpg" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2>Hombo Batu</h2>
              <button type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#rekomendasiModal" data-whatever="@mdo">Apakah Anda Memerlukan Rekomendasi Wisata?</button>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-background"><img src="img/intro/3.jpg" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2>Pantai Sorake</h2>
              <button type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#rekomendasiModal" data-whatever="@mdo">Apakah Anda Memerlukan Rekomendasi Wisata?</button>
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <!-- Modal Rekomendasi -->
      <div class="modal" id="rekomendasiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="titleRekomendasi" id="exampleModalLabel">Rekomendasi Wisata..?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                      <label for="">Pilih Daerah</label>
                      <select name="jenis_wisata_id" id="" class="formSelect">
                              <option value=" "> Nias Barat </option>
                              <option value=" "> Nias Selatan </option>
                      </select>
                  </div>

                  <div class="form-group">
                      <label for="">Jenis Wisata</label>
                      <select name="jenis_wisata_id" id="" class="formSelect">
                              <option value=" "> Alam </option>
                              <option value=" "> Sejarah </option>
                      </select>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" style="margin-right:180px;">Cari</button>
                  </div>
                </form>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section><!-- #intro -->

<main id="main">

  <!--==========================
    WISATA
  ============================-->
  <section id="portfolio"  class="section-bg" >
    <div class="container">

      <header class="section-header" style="">
        <h3>Destinasi Wisata <a style="text-transform: none; font-size: 16px;" href="/wisata">Selengkapnya..</a></h3>
      </header>
      <div class="row portfolio-container">
        @foreach ($dataWisata as $wisata)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{ URL::asset($wisata->wisata_gambar) }}" class="img-fluid" alt="">
              <a href="{{ URL::asset($wisata->wisata_gambar) }}" data-lightbox="portfolio" data-title="{{ $wisata->wisata_name }}" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="{{ route('wisataDetail', $wisata) }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>
            <div class="portfolio-info">
              <h4><a href="{{ route('wisataDetail', $wisata) }}">{{ $wisata->wisata_name}}</a></h4>
              <div class="rating">
                  <input id="input-1" name="input-1" class="rating" data-min="0" data-max="5" data-step="0.1" value="{{ $wisata->averageRating }}" data-size="xs" disabled="">
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

  <!--==========================
    ACARA DAN FESTIVAL
  ============================-->
  <section id="services">
    <div class="container">

      <header class="section-header" style="">
        <h3>Acara dan Festival <a style="text-transform: none; font-size: 16px;" href="/acaradanfestival">Selengkapnya..</a></h3>
      </header>

      <div class="row portfolio-container">

        @foreach ($dataAcaradanFestival as $acaradanfestival)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" >
          <div class="portfolio-wrap">
            <figure>
                <a href="{{ route('acaradanfestivalDetail', $acaradanfestival) }}"><img src="{{ URL::asset($acaradanfestival->acaradanfestival_gambar) }}" class="img-fluid" alt=""></a>
            </figure>
            <div class="portfolio-info" style="background-color:black">
              <h4><a href="{{ route('acaradanfestivalDetail', $acaradanfestival) }}">{{ $acaradanfestival->artikel['artikel_title']}}</a></h4>
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

    </div>
  </section>


</main>
@endsection

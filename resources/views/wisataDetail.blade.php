@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="{{ URL::asset($wisata->wisata_gambar) }}" alt="">
            </div>
          </div>
        </div>
  </section><!-- #intro -->

  <section id="about">
    <div class="container">
      <header class="section-header">
        <h3>{{ $wisata->wisata_name }}</h3>
        <i class="ion-ios-location"> {{ $wisata->wisata_lokasi}}</i>
      </header>
      <p>{{ $wisata->artikel['artikel']}}</p>
      <div class="col-md12">
        <video width="100%" height="300px" controls>
          <source src="movie.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
    <div class="container">
      <div style="width:100%; height:300px;">
        {!! Mapper::render() !!}
      </div>
    </div>
  </section><!-- #about -->
  <div class="container">
  </div>

  <div class="container">

  	<div class="card">
    
      <div class="row">
          <div class="col-xs-12 col-md-12">
              <div class="well well-sm">
                  <div class="row">
                      <div class="col-xs-12 col-md-6 text-left"> <!--class total rating-->
                          <!-- <h1 class="rating-num">{{ str_limit ($wisata->averageRating, 3,'') }}</h1> -->
                          <div class="rating">
                              <input id="input-1" name="input-1" class="rating" data-min="0" data-max="5" data-step="0.1" value="{{ $wisata->averageRating }}" data-size="xs" disabled="">
                          </div>
                  </div>
              </div>
          </div>
        </div>

  	    <div class="card-body">
          @foreach ($wisata->ulasan()->get() as $ulasan)
	        	<div class="card card-inner">
            	    <div class="card-body">
            	        <div class="row">
                    	    <div class="col-md-2">
                    	        <img src="{{ URL::asset( $ulasan->user['avatar']) }}" class="img img-rounded img-fluid" style=""/>
                    	        <p class="text-secondary text-center">{{ $ulasan->created_at->diffForHumans()}}</p>
                    	    </div>
                    	    <div class="col-md-10">
                    	        <p>
                                <a href="#"><strong>{{$ulasan->user->name}}</strong></a>
                                <span class="float-right"><input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $wisata->rating['rating'] }}" data-size="xs"></span>
                              </p>
                    	        <p>{{$ulasan->isi_ulasan}}</p>
                    	    </div>
            	        </div>
            	    </div>
	            </div>
            @endforeach
  	    </div>
        <div class="panel-body">

          <button type="button" class="btn btn-primary fa fa-plus-circle" data-toggle="modal" data-target="#exampleModal"> Tambah Ulasan</button>

          <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">{{$wisata->wisata_name}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body has-feedback{{ $errors->has('isi_ulasan') ? ' has-error ' : ''}}">
                  <form method="post" action="{{ route('wisata.ulasan.store', $wisata) }}" >
                    {{ csrf_field() }}
                    <div class="form-group">
                      <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="" data-size="xs">
                      <input type="hidden" name="id" required="" value="{{ $wisata->id }}">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Ulasan :</label>
                      <textarea name="isi_ulasan" class="form-control" id="message-text" required autofocus></textarea>
                      @if($errors->has('isi_ulasan'))
                        <span class="help-block">
                          <p>{{ $errors->first('isi_ulasan') }}</p>
                        </span>
                      @endif
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <input type="submit" value="Komentar" class="btn btn-primary">
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
  	</div>
  </div>
  <script type="text/javascript">
  </script>

@endsection

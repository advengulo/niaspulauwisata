@extends('layouts.layout')

@section('content')
  <!-- Header Wisata  -->
  <section id="intro" style="height:30vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:30vh;">
            <div class="carousel-background"><img src="{{ URL::asset($wisata->wisata_gambar) }}" alt="">
            </div>
          </div>
        </div>
  </section><!-- #End Header Wisata -->

  <!-- Content Wisata   -->
  <section id="portfolio" class="section-bg">
    <div class="container">
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b5dcee7847546ad"></script>
      <div class="row">
        <div class="col-md-9" style="padding-right:20px">
          <header class="section-header">
            <h3 style="padding-bottom: 0px;">{{ $wisata->wisata_name }}</h3>
            <div> <i class="ion-ios-location"> {{ $wisata->wisata_lokasi}}</i> </div>
            <div class="rating">
                <input id="input-1" name="input-1" class="rating" data-min="0" data-max="5" data-step="0.1" value="{{ $wisata->averageRating }}" data-size="xs" disabled="">
            </div>
          </header>
        <img src="{{ URL::asset($wisata->wisata_gambar) }}" class="img-rounded" alt="Cinque Terre" width="100%" height="auto">

        <p>{!! $wisata->artikel->artikel !!}</p>
      </div>

      <div class="col-md-3">
        
        <hr style="border-width:2px">
        <h3 style="margin-top:58px;">Map</h3>
        <div style="width:100%; height:615px;">
            {!! Mapper::render() !!}
        </div>
      </div>
    </div>
 `
    <div class="container" style="padding:10px 0">
        <header class="section-header">
          <h2>Gallery</h2>
        </header>
        <div class="row">
          <div class="col-md-12">
          @foreach ($wisata->gallery()->get() as $gallery)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
              <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="{{$wisata->wisata_name}}"
                 data-image="{{ asset($gallery->gallery_gambar) }}"
                 data-target="#image-gallery">
                  <img class="img-thumbnail"
                    srcset="{{ asset($gallery->gallery_gambar) }}"
                    alt="Another alt text">
              </a>
            </div>
            @endforeach
          </div>


          <div class="col-md-4">
            <form method="post" action="{{ route('ulasan.tambahGallery', $wisata) }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
             <table class="table">
              <tr>
               <td align="right"><label>Tambah Foto</label></td>
               <td ><input type="file" name="select_file" /></td>
               <td align="left"><input type="submit" name="upload" class="btn btn-primary" value="Upload"></td>
              </tr>
             </table>
            </div>
            @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ $message }}</strong>
              </div>
            @endif
           </form>
          </div>
        </div>

        <div class="modal" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section><!-- End Gallery -->


  <section id="portfolio"  class="section-bg" >
    <div class="container">
      <header class="section-header" style="">
        <h4>Mungkin Anda Sukai</h4>
      </header>
      <div class="row portfolio-container">
        @foreach ($itemBased as $wisatalike)
        <div class="col-md-3 portfolio-item filter-app wow fadeInUp">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{ URL::asset($wisatalike->wisata_gambar) }}" class="img-fluid" alt="">
              <a href="{{ URL::asset($wisatalike->wisata_gambar) }}" data-lightbox="portfolio" data-title="{{ $wisatalike->wisata_name }}" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
              <a href="{{ route('wisataDetail', $wisatalike) }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>
            <div class="portfolio-info">
              <h4><a href="{{ route('wisataDetail', $wisatalike) }}">{{ $wisatalike->wisata_name}}</a></h4>
              <div class="rating">
                  <input id="input-1" name="input-1" class="rating" data-min="0" data-max="5" data-step="0.1" value="{{ $wisatalike->averageRating }}" data-size="xs" disabled="">
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>


  <!-- Ulasan  -->
  <div class="container">
    <div class="row">
    @if($message=Session::get('successUlasan'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
      </div>
    @endif

    <div class="col-md-12">
    <button type="button" class="btn btn-primary btn-block fa fa-plus-circle" data-toggle="modal" data-target="#exampleModal"> Tambah Ulasan</button>
    </div>
          <div class="card-body"> <!-- Ulasan -->
            @foreach ($wisata->ulasan()->get() as $ulasan)
  	        	<div class="card card-inner">
              	    <div class="card-body">

              	        <div class="row">
                      	    <div class="col-md-2">
                      	        <img style="width:100px ; height:auto;" src="{{ URL::asset( $ulasan->user['avatar']) }}" class="img img-rounded img-fluid" style="width:70px; height:70px; "/>
                      	        <!--<p class="text-secondary text-center">{{ $ulasan->created_at->diffForHumans()}}</p> -->
                      	    </div>
                      	    <div class="col-md-10">
                                <div><strong>{{$ulasan->user->name}}</strong></div>
                                <div><input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $ulasan->temp_rat }}" data-size="xs"></span></div>
                                <div><p>{{$ulasan->isi_ulasan}}</p> </div>
                      	    </div>
              	        </div>
              	    </div>
  	            </div>
              @endforeach
    	    </div> <!-- #eND Ulasan -->

          <div class="panel-body"> <!-- Modal Ulasan -->
            <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Tulis ulasan {{$wisata->wisata_name}} </strong></h5>
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
          </div> <!-- End Modal Ulasan -->

        </div>
      </div>


<!-- Scrip modal Gallery -->
<script type="text/javascript">
let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

</script> <!--End Scrip Gallery  -->
@endsection

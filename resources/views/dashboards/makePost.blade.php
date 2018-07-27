@extends('layouts.dashboardLayout')

@section('content')
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper">
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">
                    Make Post</div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->
    <!--BEGIN CONTENT-->
    <div class="page-content">
        <div id="tab-general">
            <div class="row mbl">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <ul id="generalTab" class="nav nav-tabs responsive">
                            <li class="active"><a href="#wisata" data-toggle="tab">Wisata</a></li>
                            <li><a href="#budaya" data-toggle="tab">Budaya</a></li>
                            <li><a href="#transportasi" data-toggle="tab">Transportasi</a></li>
                            <li><a href="#kuliner" data-toggle="tab">Kuliner</a></li>
                            <li><a href="#acaradanfestival" data-toggle="tab">Acara dan Festival</a></li>
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                            <div id="wisata" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="{{ Route('makePost.store') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="">Nama Wisata</label>
                                                <input type="text" class="form-control" name="wisata_name" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Gambar Wisata</label>
                                                <input type="file" name="wisata_gambar" id="wisata_gambar" accept="image/*" required>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </div>

                                            <div class="row">
                                              <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="">Cari Lokasi : </label>
                                                    <input type="text" id="searchmap" placeholder="">
                                                    <div id="map-canvas"></div>
                                                </div>
                                              </div>
                                              <div class="col-md-4">
                                                <div id="map-latlong">
                                                <div class="form-group">
                                                    <label for="">Langtitude</label>
                                                    <input type="text" class="form-control input-sm" name="lat" id="lat" disabled>
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Longtitude</label>
                                                    <input type="text" class="form-control input-sm" name="lng" id="lng" disabled>
                                                </div>
                                              </div>
                                            </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Nama Daerah</label>
                                                <input type="text" class="form-control" name="wisata_lokasi" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Jenis Wisata</label>
                                                <select name="wisata_jenis_id" id="" class="form-control">
                                                    @foreach ($jeniswisatas as $jeniswisata)
                                                        <option value="{{ $jeniswisata->id }}"> {{$jeniswisata->jeniswisata_name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Artikel</label>
                                                <textarea name="artikel" id="wysiwyg" cols="30" rows="5" class="form-control" placeholder="Artikel" required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" value="Save">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div id="budaya" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                    <form action="{{ Route('makePost.store') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="">Nama Budaya</label>
                                                <input type="text" class="form-control" name="budaya_name" required autofocus>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Gambar Budaya</label>
                                                <input type="file" name="budaya_gambar" id="budaya_gambar" required autofocus>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Lokasi Budaya</label>
                                                <input type="text" class="form-control" name="budaya_lokasi" required autofocus>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Artikel</label>
                                                <textarea name="artikel" id="wysiwyg1" cols="30" rows="5" class="form-control" required autofocus></textarea>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" value="Save">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div id="transportasi" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                    <form action="{{ Route('makePost.store') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="">Nama Transportasi</label>
                                                <input type="text" class="form-control" name="transportasi_name" required autofocus>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Gambar Transportasi</label>
                                                <input type="file" name="transportasi_gambar" id="transportasi_gambar" required autofocus>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Jenis Transportasi</label>
                                                <input type="text" class="form-control" name="transportasi_jenis" required autofocus>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Artikel</label>
                                                <textarea name="artikel" id="" cols="30" rows="5" class="form-control" required autofocus></textarea>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" value="Save">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div id="kuliner" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                    <form action="{{ Route('makePost.store') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="">Nama Kuliner</label>
                                                <input type="text" class="form-control" name="kuliner_name" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Gambar Kuliner</label>
                                                <input type="file" name="kuliner_gambar" id="kuliner_gambar" required>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Lokasi kuliner</label>
                                                <input type="text" class="form-control" name="kuliner_lokasi" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Artikel</label>
                                                <textarea name="artikel" id="wysiwyg3" cols="30" rows="5" class="form-control" required></textarea>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" value="Save">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div id="acaradanfestival" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                    <form action="{{ Route('makePost.store') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="">Nama Acara dan Festival</label>
                                                <input type="text" class="form-control" name="acaradanfestival_name" required autofocus>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Gambar Acara dan Festival</label>
                                                <input type="file" name="acaradanfestival_gambar" id="acaradanfestival_gambar" required autofocus>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Tanggal Acara</label>
                                                <input type="date" class="form-control" name="acaradanfestival_tanggal" required autofocus>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Lokasi  Acara</label>
                                                <input type="text" class="form-control" name="acaradanfestival_lokasi" required autofocus>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Artikel</label>
                                                <textarea name="artikel" id="wysiwyg4" cols="30" rows="5" class="form-control" required autofocus></textarea>
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary" value="Save">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--END CONTENT-->
    </div>
    <!--END PAGE WRAPPER-->
</div>
@endsection

@section('js')
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
    $('#wysiwyg').ckeditor();
</script>

<script>
    $('#wysiwyg1').ckeditor();
</script>
<script>
    $('#wysiwyg2').ckeditor();
</script>
<script>
    $('#wysiwyg3').ckeditor();
</script>
<script>
    $('#wysiwyg4').ckeditor();
</script>

<script>
var map = new google.maps.Map(document.getElementById('map-canvas'),{
           center:{
               lat: 1.1255279,
               lng: 97.5247243
           },
           zoom:10
       });
       var marker = new google.maps.Marker({
           position: {
               lat: 1.1255279,
               lng: 97.5247243
           },
           map: map,
           draggable: true
       });
       var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
       google.maps.event.addListener(searchBox,'places_changed',function(){
           var places = searchBox.getPlaces();
           var bounds = new google.maps.LatLngBounds();
           var i, place;
           for(i=0; place=places[i];i++){
                 bounds.extend(place.geometry.location);
                 marker.setPosition(place.geometry.location); //set marker position new...
             }
             map.fitBounds(bounds);
             map.setZoom(10);
       });
       google.maps.event.addListener(marker,'position_changed',function(){
           var lat = marker.getPosition().lat();
           var lng = marker.getPosition().lng();
           $('#lat').val(lat);
           $('#lng').val(lng);
       });
</script>
@endsection

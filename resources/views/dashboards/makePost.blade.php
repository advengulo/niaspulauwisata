<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
   var konten = document.getElementById("konten");
     CKEDITOR.replace(konten,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>

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
                                                <input type="file" name="wisata_gambar" id="wisata_gambar" required>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Video Wisata</label>
                                                <input type="text" class="form-control" name="wisata_video" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Rating Wisata</label>
                                                <input type="text" class="form-control" name="wisata_rating" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Lokasi Wisata</label>
                                                <input type="text" class="form-control" name="wisata_lokasi" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Latitude</label>
                                                <input type="text" class="form-control" name="latitude" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Longtitude</label>
                                                <input type="text" class="form-control" name="longtitude" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Jenis Wisata</label>
                                                <select name="wisata_jenis_id" id="" class="form-control">
                                                    @foreach ($jeniswisatas as $Jeniswisata)
                                                        <option value="{{ $Jeniswisata->id }}"> {{$Jeniswisata->jeniswisata_nama}} </option>
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
                                                <textarea name="artikel" id="" cols="30" rows="5" class="form-control" required autofocus></textarea>
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
                                                <textarea name="artikel" id="" cols="30" rows="5" class="form-control" required></textarea>
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
<script>
  $('#wysiwyg').ckeditor();
</script>
@endsection

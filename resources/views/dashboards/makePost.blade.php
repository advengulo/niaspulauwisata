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
                        </ul>
                        <div id="generalTabContent" class="tab-content responsive">
                            <div id="wisata" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                    <form action="{{ Route('makePost.store') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="">Nama Wisata</label>
                                                <input type="text" class="form-control" name="wisata_name">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Gambar Wisata</label>
                                                <input type="text" class="form-control" name="wisata_gambar">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Video Wisata</label>
                                                <input type="text" class="form-control" name="wisata_video">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Rating Wisata</label>
                                                <input type="text" class="form-control" name="wisata_rating">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Lokasi Wisata</label>
                                                <input type="text" class="form-control" name="wisata_lokasi">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Latitude</label>
                                                <input type="text" class="form-control" name="latitude">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Longtitude</label>
                                                <input type="text" class="form-control" name="longtitude">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Jenis Wisata</label>
                                                <select name="jenis_wisata_id" id="" class="form-control">
                                                    @foreach ($jeniswisatas as $Jeniswisata)
                                                        <option value=" {{$Jeniswisata->id }}"> {{$Jeniswisata->jeniswisata_nama}} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Artikel</label>
                                                <textarea name="artikel" id="" cols="30" rows="5" class="form-control"></textarea>
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
                                    <form action="{{ Route('makePost.store') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="">Nama Budaya</label>
                                                <input type="text" class="form-control" name="budaya_name">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Gambar Budaya</label>
                                                <input type="text" class="form-control" name="budaya_gambar">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Lokasi Budaya</label>
                                                <input type="text" class="form-control" name="budaya_lokasi">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Artikel</label>
                                                <textarea name="artikel" id="" cols="30" rows="5" class="form-control"></textarea>
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
                                    <form action="{{ Route('makePost.store') }}" method="post">
                                        {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="">Nama Transportasi</label>
                                                <input type="text" class="form-control" name="transportasi_name">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Gambar Transportasi</label>
                                                <input type="text" class="form-control" name="transportasi_gambar">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Jenis Transportasi</label>
                                                <input type="text" class="form-control" name="transportasi_jenis">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Artikel</label>
                                                <textarea name="artikel" id="" cols="30" rows="5" class="form-control"></textarea>
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

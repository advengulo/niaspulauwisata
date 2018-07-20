@extends('layouts.dashboardLayout')

@section('content')
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper">
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">
                    Edit Post</div>
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
                        <div id="generalTabContent" class="tab-content responsive">                
                            <div id="wisata" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                    <form action="{{ Route('post.update', $dataWisatas) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}
                                            <div class="form-group">
                                                <label for="">Nama Wisata</label>
                                            <input type="text" class="form-control" name="wisata_name" value="{{ $dataWisatas->wisata_name }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Gambar Wisata</label>
                                                <input type="text" class="form-control" name="wisata_gambar" value="{{ $dataWisatas->wisata_gambar }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Video Wisata</label>
                                                <input type="text" class="form-control" name="wisata_video" value="{{ $dataWisatas->wisata_video }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Rating Wisata</label>
                                                <input type="text" class="form-control" name="wisata_rating" value="{{ $dataWisatas->wisata_rating }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Lokasi Wisata</label>
                                                <input type="text" class="form-control" name="wisata_lokasi" value="{{ $dataWisatas->wisata_lokasi }}">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Jenis Wisata</label>
                                                <select name="jenis_wisata_id" id="" class="form-control">
                                                    @foreach ($jeniswisatas as $Jeniswisata)
                                                        <option value=" {{$Jeniswisata->id }}" selected> {{$Jeniswisata->jeniswisata_nama}} </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Artikel</label>
                                                <textarea name="artikel" id="" cols="30" rows="5" class="form-control"> {{ $dataWisatas->artikel['artikel'] }}</textarea>
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

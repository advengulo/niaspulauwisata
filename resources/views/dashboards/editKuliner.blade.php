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
                                    <form action="{{ Route('postkuliner.update', $dataKuliners) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}
                                            <div class="form-group">
                                                <label for="">Nama Kuliner</label>
                                            <input type="text" class="form-control" name="kuliner_name" value="{{ $dataKuliners->kuliner_name }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Gambar Kuliner</label>
                                                <input type="text" class="form-control" name="kuliner_gambar" value="{{ $dataKuliners->kuliner_gambar }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Lokasi Kuliner</label>
                                                <input type="text" class="form-control" name="kuliner_lokasi" value="{{ $dataKuliners->kuliner_lokasi }}">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Artikel</label>
                                                <textarea name="artikel" id="" cols="30" rows="5" class="form-control"> {{ $dataKuliners->artikel['artikel'] }}</textarea>
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

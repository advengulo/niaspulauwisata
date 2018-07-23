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
                                    <form action="{{ Route('postbudaya.update', $dataBudayas) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('PATCH') }}
                                            <div class="form-group">
                                                <label for="">Nama Budaya</label>
                                            <input type="text" class="form-control" name="budaya_name" value="{{ $dataBudayas->budaya_name }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Gambar Budaya</label>
                                                <input type="text" class="form-control" name="budaya_gambar" value="{{ $dataBudayas->budaya_gambar }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="">Lokasi Budaya</label>
                                                <input type="text" class="form-control" name="budaya_lokasi" value="{{ $dataBudayas->budaya_lokasi }}">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Artikel</label>
                                                <textarea name="artikel" id="" cols="30" rows="5" class="form-control"> {{ $dataBudayas->artikel['artikel'] }}</textarea>
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

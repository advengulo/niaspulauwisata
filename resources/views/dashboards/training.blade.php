@extends('layouts.dashboardLayout')

@section('content')
<!--BEGIN CONTENT-->
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper">
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">
                    Training</div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->
        <!--BEGIN CONTENT-->
        <div class="page-content">
            <div id="tab-general">
                <div id="generalTabContent" style="height:30vh" class="tab-content responsive">
                    <div class="col-md-2 col-md-offset-4" style="padding:50px 0"> 
                        <a href="{{route('training.value')}}"><button class="btn btn-primary btn-block>Training User">Training User</button></a>
                    </div>
                    <div class="col-md-2" style="padding:50px 0">
                        <a href="{{route('training.valueitem')}}"><button class="btn btn-primary btn-block>Training User">Training Item</button></a>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END PAGE WRAPPER-->
</div>
@endsection

@extends('layouts.dashboardLayout')

@section('content')
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper">
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">
                    Inbox</div>
            </div>            
            <div class="clearfix"></div>
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->
        <!--BEGIN CONTENT-->
        <div class="page-content">
            <div id="tab-general">
                <div class="row mbl">
                    <div class="col-lg-12">
                        <div class="row">
            <div class="col-sm-3 col-md-2">
                <div class="btn-group btn-group-sm">
                    <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Contacts
                        &nbsp;<span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9 col-md-10">
                <div class="btn-group">
                    <button type="button" class="btn btn-default"><input type="checkbox" style="margin: 0; vertical-align: middle;" class="checkall"/></button>
                    <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">All</a></li>
                        <li><a href="#">None</a></li>
                        <li><a href="#">Read</a></li>
                        <li><a href="#">Unread</a></li>
                        <li><a href="#">Starred</a></li>
                        <li><a href="#">Unstarred</a></li>
                    </ul>
                </div>
                <button type="button" data-toggle="tooltip" title="Refresh" class="btn btn-default mls mrs"><span class="fa fa-refresh"></span></button>
                <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">More
                        &nbsp;<span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Mark all as read</a></li>
                        <li class="divider"></li>
                        <li class="text-center pbm">
                            <small class="text-muted">Select messages to see more actions</small>
                        </li>
                    </ul>
                </div>
                <div class="pull-right"><span class="text-muted"><b>1</b>&nbsp; – &nbsp;<b>50</b>&nbsp; of &nbsp;<b>277</b></span>

                    <div class="btn-group mlm">
                        <button type="button" class="btn btn-default"><span class="fa fa-chevron-left"></span></button>
                        <button type="button" class="btn btn-default"><span class="fa fa-chevron-right"></span></button>
                    </div>
                </div>
            </div>
        </div>
            <div class="mtl mbl"></div>
            <div class="row">
            
            <div class="col-sm-9 col-md-10">
                    <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab"><span class="fa fa-inbox"></span>&nbsp;
                        Primary</a></li>
                    </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="list-group mail-box">
                            
                            
                            
                            <a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; - &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span
                                class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a>
                                
                                <a href="#" class="list-group-item"><input type="checkbox"/><span class="fa fa-star-o mrm mlm"></span><span style="min-width: 120px; display: inline-block;" class="name">Bhaumik Patel</span><span>Sed ut perspiciatis unde</span>&nbsp; -
                            &nbsp;<span style="font-size: 11px;" class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit</span><span class="time-badge">12:10 AM</span><span class="pull-right mrl"><span class="fa fa-paperclip"></span></span></a>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <ul class="list-inline item-details">
                        <li><a href="http://themifycloud.com">Admin templates</a></li>
                        <li><a href="http://themescloud.org">Bootstrap themes</a></li>
                    </ul>
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
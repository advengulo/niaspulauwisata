@extends('layouts.dashboardLayout')

@section('content')
<!--BEGIN CONTENT-->
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper">
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">
                    Dashboard</div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->
        <!--BEGIN CONTENT-->
        <div class="page-content">
            <div id="tab-general">
                <div id="sum_box" class="row mbl">
                <a href="/dashboard/usercontrol">
                    <div class="col-sm-6 col-md-3">
                        <div class="panel profit db mbm">
                            <div class="panel-body">
                                <p class="icon">
                                    <i class="icon fa fa-user"></i>
                                </p>
                                <h4 class="value">User</h4>
                                <p class="description">Control</p>
                                <div class="progress progress-sm mbn">
                                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 100%;" class="progress-bar progress-bar-success">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="/dashboard/postcontrol">
                    <div class="col-sm-6 col-md-3">
                        <div class="panel profit db mbm">
                            <div class="panel-body">
                                <p class="icon">
                                    <i class="icon fa fa-send-o"></i>
                                </p>
                                <h4 class="value">Post</h4>
                                <p class="description">Control</p>
                                <div class="progress progress-sm mbn">
                                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 100%;" class="progress-bar progress-bar-info">
                                        <span class="sr-only">80% Complete (success)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="/dashboard/makepost">
                    <div class="col-sm-6 col-md-3">
                        <div class="panel profit db mbm">
                            <div class="panel-body">
                                <p class="icon">
                                    <i class="icon fa fa-edit"></i>
                                </p>
                                <h4 class="value">Make</h4>
                                <p class="description">Post</p>
                                <div class="progress progress-sm mbn">
                                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 100%;" class="progress-bar progress-bar-warning">
                                        <span class="sr-only">80% Complete (success)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="/dashboard/kamus">
                    <div class="col-sm-6 col-md-3">
                        <div class="panel profit db mbm">
                            <div class="panel-body">
                                <p class="icon">
                                    <i class="icon fa fa-th-list"></i>
                                </p>
                                <h4 class="value">Kamus</h4>
                                <p class="description">&nbsp;</p>
                                <div class="progress progress-sm mbn">
                                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 100%;" class="progress-bar progress-bar-danger">
                                        <span class="sr-only">80% Complete (success)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="/dashboard/inbox">
                    <div class="col-sm-6 col-md-3">
                        <div class="panel profit db mbm">
                            <div class="panel-body">
                                <p class="icon">
                                    <i class="icon fa fa-file-o"></i>
                                </p>
                                <h4 class="value">Inbox</h4>
                                <p class="description">&nbsp;</p>
                                <div class="progress progress-sm mbn">
                                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 100%;" class="progress-bar progress-bar-secondary">
                                        <span class="sr-only">80% Complete (success)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="/dashboard/adminsetting">
                    <div class="col-sm-6 col-md-3">
                        <div class="panel profit db mbm">
                            <div class="panel-body">
                                <p class="icon">
                                    <i class="icon fa fa-rocket"></i>
                                </p>
                                <h4 class="value">Admin</h4>
                                <p class="description">Setting</p>
                                <div class="progress progress-sm mbn">
                                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 100%;" class="progress-bar progress-bar-blue">
                                        <span class="sr-only">80% Complete (success)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="col-sm-6 col-md-3">
                        <div class="panel profit db mbm">
                            <div class="panel-body">
                                <p class="icon">
                                    <i class="icon fa fa-key"></i>
                                </p>
                                <h4 class="value">Logout</h4>
                                <p class="description">&nbsp;</p>
                                <div class="progress progress-sm mbn">
                                    <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 100%;" class="progress-bar progress-bar-secondary ">
                                        <span class="sr-only">80% Complete (success)</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

        </div>
    </div>
    <!--END PAGE WRAPPER-->
</div>
@endsection

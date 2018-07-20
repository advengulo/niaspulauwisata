@extends('layouts.dashboardLayout')

@section('content')
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper">
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">
                    Kamus</div>
            </div>            
            <div class="clearfix"></div>
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->
        <!--BEGIN CONTENT-->
        <div class="page-content">
            <div id="tab-general">
                <div class="row mbl">
                    <div class="col-lg-12">
                        
                                    <div class="col-md-12">
                                        <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                                        </div>
                                    </div>
                        
                    </div>

                    <div class="col-lg-12">
                    <div class="row">
                
            <div class="col-lg-6">
                <div class="panel panel-violet">
                    <div class="panel-heading">Striped Table</div>
                    <div class="panel-body">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Age</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Henry</td>
                                <td>23</td>
                                <td><span class="label label-sm label-success">Approved</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>John</td>
                                <td>45</td>
                                <td><span class="label label-sm label-info">Pending</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Larry</td>
                                <td>30</td>
                                <td><span class="label label-sm label-warning">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Lahm</td>
                                <td>15</td>
                                <td><span class="label label-sm label-danger">Blocked</span></td>
                            </tr>
                            </tbody>
                        </table>
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

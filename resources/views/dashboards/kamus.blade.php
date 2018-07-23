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
                        <div class="col-lg-12">
                            
                                <div id="generalTabContent" class="tab-content responsive">                
                                    <div id="wisata" class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-md-4 col-md-offset-4">
                                                <h3 style="margin-top:0">Tambah Data Kamus :</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-7 col-md-offset-3">
                                                <form action="{{ Route('kamus.store') }}" method="POST">                                                    
                                                {{ csrf_field() }}
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" placeholder="Nias" name="nias" required autofocus>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control" placeholder="Indonesia" name="indonesia" required autofocus>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <input type="submit" class="btn btn-primary" value="ADD">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div id="generalTabContent" class="tab-content responsive">                
                                <div id="wisata" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;"></div>                            
                                            <div id="grid-layout-table-1" class="box jplist">
                                                <div class="jplist-ios-button"><i class="fa fa-sort"></i>Actions</div>
                                                
                                                <div class="jplist-panel box panel-top">
                                                    <button type="button" data-control-type="reset" data-control-name="reset" data-control-action="reset" class="jplist-reset-btn btn btn-default">Reset<i class="fa fa-share mls"></i></button>
                                                    
                                                    <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" class="jplist-drop-down form-control">
                                                        <ul class="dropdown-menu">
                                                            <li><span data-number="3"> 3 per page</span></li>
                                                            <li><span data-number="5"> 5 per page</span></li>
                                                            <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                                            <li><span data-number="all"> view all</span></li>
                                                        </ul>
                                                    </div>

                                                    <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
                                                        <ul class="dropdown-menu">
                                                            <li><span data-path="default">Sort by</span></li>
                                                            <li><span data-path=".title" data-order="asc" data-type="text">Nias A-Z</span></li>
                                                            <li><span data-path=".title" data-order="desc" data-type="text">Nias Z-A</span></li>
                                                            <li><span data-path=".desc" data-order="asc" data-type="text">Indonesia A-Z</span></li>
                                                            <li><span data-path=".desc" data-order="desc" data-type="text">Indonesia Z-A</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text-filter-box">
                                                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".title" type="text" value="" placeholder="Search by Nias" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter" class="form-control"/></div>
                                                    </div>
                                                    <div class="text-filter-box">
                                                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".desc" type="text" value="" placeholder="Search by Indonesia" data-control-type="textbox" data-control-name="desc-filter" data-control-action="filter" class="form-control"/></div>
                                                    </div>                                                    
                                                </div>
                                                <div class="box text-shadow">
                                                    <div class="row">
                                                        <div class="col-md-6 col-md-offset-3">
                                                    <table class="demo-tbl">
                                                        
                                                            <tr>
                                                                <td align="center" class="col-md-1"><strong>No</strong></td>
                                                                <td align="center"><strong>Nias</strong></td>
                                                                <td align="center"><strong>Indonesia</strong></td>
                                                                <td align="center" class="col-md-3"><strong>Action</strong></td>
                                                            </tr>
                                                            @foreach($dataKamus as $kamus)
                                                            <tr class="tbl-item"><!--<img/>-->
                                                                <td>{{ $kamus->id }}</td> 
                                                                <!--<data></data>-->
                                                                <td class="td-block">
                                                                    <p class="title"  style="color:black; font-size:14px; font-weight: normal;">{{$kamus->nias}}</p>
                                                                <td><p class="desc" align="justify" style="color:black; font-size:14px; font-weight:normal">{{$kamus->indonesia}}</p></td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <a href="#" class="btn btn-primary">
                                                                                <span class="fa fa-edit fa-fw" aria-hidden="true"></span>
                                                                                <span><strong></strong></span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-md-1">
                                                                            <form class="" action="{{route('kamus.destroy', $kamus->id)}}" method="post" >
                                                                                    {{ csrf_field() }}
                                                                                    {{ method_field('DELETE') }}
                                                                                <button type="submit" class="btn btn-danger"> <span class="fa fa-remove fa-fw" aria-hidden="true"></span> <strong></strong> </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>                                                          
                                                            @endforeach
                                                    </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box jplist-no-results text-shadow align-center"><p>No results found</p></div>
                                                <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                                <div class="jplist-panel box panel-bottom">
                                                    <div data-control-type="drop-down" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-drop-down form-control">
                                                        <ul class="dropdown-menu">
                                                            <li><span data-number="3"> 3 per page</span></li>
                                                            <li><span data-number="5"> 5 per page</span></li>
                                                            <li><span data-number="10"> 10 per page</span></li>
                                                            <li><span data-number="all"> view all</span></li>
                                                        </ul>
                                                    </div>
                                                    <div data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-control-animate-to-top="true" data-datetime-format="{year}/{month}/{day}" class="jplist-drop-down form-control">
                                                        <ul class="dropdown-menu">
                                                            <li><span data-path="default">Sort by</span></li>
                                                            <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                            <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                            <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                            <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                                                            <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                                                            <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                            <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                                        </ul>
                                                    </div>
                                                    <div data-type="{start} - {end} of {all} total data" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                    <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-pagination"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!--END ARTIKEL TAB -->    
                            </div> <!--END TAB CONTENT-->
                        </div>                            
                    </div>                            
                </div>
            </div>
        </div> <!--END CONTENT-->
        
        
    </div>
    <!--END PAGE WRAPPER-->
</div>
@endsection

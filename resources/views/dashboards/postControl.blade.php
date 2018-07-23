@extends('layouts.dashboardLayout')

@section('content')
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper">
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">
                    Post Control</div>
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
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @elseif ($message = Session::get('delete'))
                                <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @elseif ($message = Session::get('update'))
                                <div class="alert alert-info alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif  
                            <ul id="generalTab" class="nav nav-tabs responsive">
                                <li class="{{Request::is("dashboard/postcontrol")?'active':''}}"><a href="/dashboard/postcontrol">Wisata</a></li>
                                <li class="{{Request::is("dashboard/postbudaya")?'active':''}}"><a href="/dashboard/postbudaya">Budaya</a></li>
                                <li class="{{Request::is("dashboard/posttransportasi")?'active':''}}"><a href="/dashboard/posttransportasi">Transportasi</a></li>
                                <li class="{{Request::is("dashboard/postkuliner")?'active':''}}"><a href="/dashboard/postkuliner">Kuliner</a></li>
                                <li class="{{Request::is("dashboard/postacaradanfestival")?'active':''}}"><a href="/dashboard/postacaradanfestival">Acara Dan Festival</a></li>
                            </ul>
                            <div id="generalTabContent" class="tab-content responsive">
                                <div id="wisata" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;"></div>
                                            <div id="grid-layout-table-1" class="box jplist">
                                                <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>

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
                                                            <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                                            <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                                            <li><span data-path=".desc" data-order="asc" data-type="text">Description A-Z</span></li>
                                                            <li><span data-path=".desc" data-order="desc" data-type="text">Description Z-A</span></li>
                                                            <li><span data-path=".like" data-order="desc" data-type="number">Likes desc</span></li>
                                                            <li><span data-path=".date" data-order="asc" data-type="datetime">Date asc</span></li>
                                                            <li><span data-path=".date" data-order="desc" data-type="datetime">Date desc</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="text-filter-box">
                                                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".title" type="text" value="" placeholder="Filter by Title" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter" class="form-control"/></div>
                                                    </div>
                                                    <div class="text-filter-box">
                                                        <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".desc" type="text" value="" placeholder="Filter by Description" data-control-type="textbox" data-control-name="desc-filter" data-control-action="filter" class="form-control"/></div>
                                                    </div>
                                                    <div data-type="Page {current} of {pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                                    <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" class="jplist-pagination"></div>
                                                </div>

                                                

                                                <div class="box text-shadow">
                                                        
                                                    <table class="demo-tbl">
                                                        <!--<item>1</item>-->
                                                        @foreach($dataWisatas as $wisata)
                                                            <tr class="tbl-item"><!--<img/>-->
                                                                <td class="col-lg-1"><img src="{{ $wisata->wisata_gambar }}" style="width:120px; height:90px" alt="" title=""/></td>
                                                                <!--<data></data>-->
                                                                <td class="td-block"><p class="date">{{ $wisata->created_at }}</p>

                                                                    <a href="{{ route('post.show', $wisata->id)}}"> <p class="title">{{$wisata->wisata_name}}</p> </a>

                                                                    <p class="desc" align="justify">{{  str_limit($wisata->artikel['artikel'], 305, ' ....')}}</p>
                                                                    <p class="like"></p></td>
                                                                <td class="col-md-1">
                                                                    <div class="row">
                                                                        <div class="col-md-8" style="margin:5px 0 10px 0;">
                                                                            <a href="{{ route('post.edit', $wisata->id)}}" class="btn btn-primary">
                                                                                <span class="fa fa-edit fa-fw" aria-hidden="true"></span>
                                                                                <span><strong>Edit &nbsp; &nbsp;&nbsp;</strong></span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-md-8" style="margin-top:4px;">
                                                                            <form class="" action="{{ route('post.destroy', $wisata->id) }}" method="post" >
                                                                                {{ csrf_field() }}
                                                                                {{ method_field('DELETE') }}
                                                                                <button type="submit" class="btn btn-danger"> <span class="fa fa-remove fa-fw" aria-hidden="true"></span> <strong>Delete</strong> </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </table>
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
                                                    <div data-type="{start} - {end} of {all}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
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
    </div> <!--END PAGE WRAPPER-->

@endsection

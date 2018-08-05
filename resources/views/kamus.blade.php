@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="{{ URL::asset('img/intro/sampulkamus.jpg') }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>K A M U S</h2>
              </div>
            </div>
          </div>
        </div>
  </section><!-- #intro -->

  <!--==========================
    Skills Section
  ============================-->
  <section id="about">
    <div class="container">
            <div class="row mbl">
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-10 col-md-offset-1"  style="background:white; border: 1px solid; border-color: #e5e5e5 !important; border-top: 0; padding: 20px; margin-bottom:20px" >
                            <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;"></div>
                            <div id="grid-layout-table-1" class="box jplist">
                                <div class="jplist-ios-button"><i class="fa fa-sort"></i>Actions</div>

                                <div class="jplist-panel box panel-top">
                                    <button style="background: linear-gradient(to bottom, #f2f5f7 0%,#f6f8f9 50%,#d7dee3 50%,#d7dee3 50%,#d7dee3 100%);" type="button" data-control-type="reset" data-control-name="reset" data-control-action="reset" class="jplist-reset-btn btn btn-default">Reset<i style="margin-left:5px;" class="fa fa-share mls"></i></button>

                                    <div style="width: 170px;" data-control-type="drop-down" data-control-name="paging" data-control-action="paging" class="jplist-drop-down form-control">
                                        <ul class="dropdown-menu">
                                            <li><span data-number="3"> 3 per page</span></li>
                                            <li><span data-number="5"> 5 per page</span></li>
                                            <li><span data-number="10" data-default="true"> 10 per page</span></li>
                                            <li><span data-number="all"> view all</span></li>
                                        </ul>
                                    </div>

                                    <div style="width: 170px;" data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-datetime-format="{month}/{day}/{year}" class="jplist-drop-down form-control">
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
                                <div class="col-md-6 col-md-offset-3">
                                    <table class="demo-tbl">

                                            <tr>
                                                <td align="center"><strong>Nias</strong></td>
                                                <td align="center"><strong>Indonesia</strong></td>
                                            </tr>
                                            @foreach($dataKamus as $kamus)
                                            <tr class="tbl-item"><!--<img/>-->
                                                <!--<data></data>-->
                                                <td class="td-block">
                                                    <p class="title"  style="color:black; font-size:14px; font-weight: normal;">{{$kamus->nias}}</p>
                                                <td><p class="desc" align="justify" style="color:black; font-size:14px; font-weight:normal">{{$kamus->indonesia}}</p></td>

                                            </tr>
                                            @endforeach
                                    </table>
                                </div>
                                <div class="box jplist-no-results text-shadow align-center"><p>No results found</p></div>
                                <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                <div class="jplist-panel box panel-bottom">
                                    <div style="width: 170px;" data-control-type="drop-down" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-drop-down form-control">
                                        <ul class="dropdown-menu">
                                            <li><span data-number="3"> 3 per page</span></li>
                                            <li><span data-number="5"> 5 per page</span></li>
                                            <li><span data-number="10"> 10 per page</span></li>
                                            <li><span data-number="all"> view all</span></li>
                                        </ul>
                                    </div>
                                    <div style="width: 170px;" data-control-type="drop-down" data-control-name="sort" data-control-action="sort" data-control-animate-to-top="true" data-datetime-format="{year}/{month}/{day}" class="jplist-drop-down form-control">
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
            </div> <!--END TAB CONTENT-->


    </div> <!--END CONTENT-->

    </div>
  </section>
@endsection

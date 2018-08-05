@extends('layouts.dashboardLayout')

@section('content')
     <!--BEGIN PAGE WRAPPER-->
     <div id="page-wrapper">
    <!--BEGIN CONTENT-->
    <div class="page-content">
        <div id="tab-general">
            <div class="row mbl">
                <div class="col-lg-12">
                    <div class="col-lg-12">

                        <div class="box text-shadow">
                            <table class="demo-tbl">
                                <!--<item>1</item>-->
                                    <tr class="tbl-item"><!--<img/>-->
                                        <td class="col-lg-1"><img src="{{ $wisata->wisata_gambar }}" style="width:120px; height:90px" alt="" title=""/></td>
                                        <!--<data></data>-->
                                        <td class="td-block"><p class="date">{{ $wisata->created_at->diffForHumans() }}</p>

                                            <p class="title">{{$wisata->wisata_name}}</p>

                                            <p class="desc" align="justify">{!! $wisata->artikel->artikel !!}</p>

                                        </td>
                                    </tr>

                            </table>
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

@extends('layouts.dashboardLayout')

@section('content')
<!--BEGIN CONTENT-->
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper">
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">
                    Data Training</div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->
        <!--BEGIN CONTENT-->
        <div class="page-content">
            <div id="tab-general">
                @foreach($rataRatingUser as $rataWisata)
                    <div>{{$rataWisata}}</div>
                @endforeach

                {{-- @foreach($selishRatings as $selisihRating)
                    <div>{{$selisihRating }}</div>
                @endforeach --}}
            </div>
        </div>
                
    </div>
    <!--END PAGE WRAPPER-->
</div>
@endsection

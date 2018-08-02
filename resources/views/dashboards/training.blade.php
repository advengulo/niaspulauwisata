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
                @foreach($rataRatingUser as $userID => $rataWisata)
                    <div>User ID : {{ $userID }} = {{$rataWisata}}</div>
                @endforeach

                @foreach($selisihRatings as $userID => $users)
                  <div>
                    <p>User ID: <b>{{ $userID }}</b>
                    @foreach($users as $wisataID => $wisata)
                      <p>Wisata ID: {{ $wisataID }} = {{ $wisata }}</p>
                    @endforeach
                  </div>
                @endforeach
            </div>
        </div>

    </div>
    <!--END PAGE WRAPPER-->
</div>
@endsection

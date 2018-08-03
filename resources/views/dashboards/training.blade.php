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
                <div class="row">
                        <div class="col-md-4">
                            <h2>Data Rating Awal</h2>        
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>User ID</th>
                                    @foreach($datas as $userID => $dataAwals)
                                    @foreach($dataAwals as $wisataID => $rating)
                                    <th>Wisata ID {{$wisataID}}</th>
                                    @endforeach
                                    @break
                                    @endforeach
                                    
                                </tr>
                                </thead>
                                <tbody>                                    
                                    <tr>
                                        @foreach($datas as $userID => $dataAwals)                                                                
                                            <td>{{ $userID }}</td>
                                        @foreach($dataAwals as $wisataID => $rating)
                                            <td>{{ $rating }}</td>
                                        @endforeach
                                    </tr>
                                        @endforeach                                                         
                                </tbody>
                            </table>
                        </div>
                    </div>
                
                
                <div class="row">
                    <div class="col-md-4">
                    <h2>Rata Wisata</h2>          
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Rata Wisata</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rataRatingUser as $userID => $rataWisata)
                        <tr>                            
                            <td>{{ $userID }}</td>
                            <td>{{ $rataWisata}}</td>
                        </tr>
                        @endforeach                              
                        </tbody>
                    </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <h2>Selisih Rata wisata</h2>          
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>User ID</th>
                                @foreach($selisihRatings as $userID => $users)
                                @foreach($users as $wisataID => $wisata)
                                <th>Wisata ID {{$wisataID}}</th>
                                @endforeach
                                @break
                                @endforeach
                                
                            </tr>
                            </thead>
                            <tbody>                                    
                                <tr>
                                    @foreach($selisihRatings as $userID => $users)                                                                
                                        <td>{{ $userID }}</td>
                                    @foreach($users as $wisataID => $wisata)
                                        <td>{{ $wisata }}</td>
                                    @endforeach
                                </tr>
                                    @endforeach                                                         
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- @foreach($nilaiPearsons as $userID => $persons)
                  <div>
                    <p>User ID: <b>{{ $userID }}</b>
                    @foreach($persons as $userID => $person)
                      <p>Wisata ID: {{ $userID }} = {{ $persons }}</p>
                    @endforeach
                  </div>
                @endforeach --}}


                

                {{-- @foreach($selisihRatings as $userID => $users)
                  <div>
                    <p>User ID: <b>{{ $userID }}</b>
                    @foreach($users as $wisataID => $wisata)
                      <p>Wisata ID: {{ $wisataID }} = {{ $wisata }}</p>
                    @endforeach
                  </div>
                @endforeach --}}
            </div>
        </div>

    </div>
    <!--END PAGE WRAPPER-->
</div>
@endsection

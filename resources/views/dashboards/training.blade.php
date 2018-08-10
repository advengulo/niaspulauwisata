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
                                <th>User_id/Wisata_id</th>
                                @foreach($datas as $userID => $dataAwals)
                                    @foreach($dataAwals as $wisataID => $rating)
                                        <th>{{$wisataID}}</th>
                                    @endforeach
                                    @break
                                @endforeach                                
                            </tr>
                            </thead>
                            <tbody>                                    
                                <tr>
                                    @foreach($datas as $userID => $dataAwals)                                                                
                                        <td><strong>{{ $userID }}</strong></td>
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
                            <th style="text-align:center">User_id</th>
                            <th style="text-align:center">Rata Wisata</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rataRatingUser as $userID => $rataWisata)
                        <tr>                            
                            <td><strong>{{ $userID }}</strong></td>
                            <td>{{ number_format($rataWisata, 2, '.', ',') }}</td>
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
                                <th>User_id/Wisata_id</th>
                                @foreach($selisihRatings as $userID => $users)
                                @foreach($users as $wisataID => $wisata)
                                <th style="text-align:center">{{$wisataID}}</th>
                                @endforeach
                                @break
                                @endforeach                                
                            </tr>
                            </thead>
                            <tbody>                                    
                                <tr>
                                    @foreach($selisihRatings as $userID => $users)                                                                
                                        <td><strong>{{ $userID }}</strong></td>
                                    @foreach($users as $wisataID => $wisata)
                                        <td>{{ number_format($wisata, 2, '.', ',') }}</td>
                                    @endforeach
                                </tr>
                                    @endforeach                                                         
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <h2>Nilai Person</h2>          
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>User_id/User_id</th>
                            @foreach($nilaiPearsons as $userID => $persons)
                                <th style="text-align:center">{{$userID}}</th>
                            @endforeach                                
                            </tr>
                            </thead>
                            <tbody>                                    
                                <tr>
                                    @foreach($nilaiPearsons as $userID => $users)                                                                
                                        <td><strong>{{ $userID }}</strong></td>
                                    @foreach($users as $wisataID => $wisata)
                                        @if($wisata - (int)$wisata != 0)    
                                            <td>{{ number_format($wisata, 3, '.', ',') }}</td>
                                        @else
                                            <td>{{ $wisata }}</td>
                                        @endif    
                                    @endforeach
                                </tr>
                                    @endforeach                                                         
                            </tbody>
                        </table>
                    </div>
                </div> 
                
                <div class="row">
                    <div class="col-md-4">
                    <h2>Nilai Predict User Based</h2>          
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>User_id/Wisata_id</th>
                                @foreach($selisihRatings as $userID => $users)
                                @foreach($users as $wisataID => $wisata)
                                <th style="text-align:center">{{$wisataID}}</th>
                                @endforeach
                                @break
                                @endforeach                             
                            </tr>
                            </thead>
                            <tbody>                                    
                                <tr>
                                    @foreach($nilaiRatings as $userID => $users) 
                                        <td>{{ $userID }}</td>  
                                        @foreach($users as $wisataID => $wisata)                                  
                                        @if($wisata - (int)$wisata != 0)    
                                            <td>{{ number_format($wisata, 3, '.', ',') }}</td>
                                        @else
                                            <td>{{$wisata}}</td>
                                        @endif
                                        @endforeach
                                </tr>
                                    @endforeach                                                         
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>
        </div>

    </div>
    <!--END PAGE WRAPPER-->
</div>
@endsection

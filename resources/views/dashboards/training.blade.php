@extends('layouts.dashboardLayout')

@section('content')
<!--BEGIN CONTENT-->
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper">
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">
                    Training</div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->
        <!--BEGIN CONTENT-->
        <div class="page-content">
            <div id="tab-general">
                <div id="generalTabContent" style="height:30vh" class="tab-content responsive">
                    <div class="col-md-2 col-md-offset-4" style="padding:50px 0"> 
                        <a href="{{route('training.value')}}"><button class="btn btn-primary btn-block>Training User">Training User</button></a>
                    </div>
                    <div class="col-md-2" style="padding:50px 0">
                        <a href="{{route('training.valueitem')}}"><button class="btn btn-primary btn-block>Training User">Training Item</button></a>                        
                    </div>
                </div>
<<<<<<< HEAD

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
                
                {{-- <div class="row">
                    <div class="col-md-4"> Nilai Mae : {{$nilaiMae}} </div></div> --}}
                
=======
>>>>>>> 87f7369abb71b8b4082d10db9a3d219907bbc1d4
            </div>
        </div>
    </div>
    <!--END PAGE WRAPPER-->
</div>
@endsection

@extends('layouts.dashboardLayout')

@section('content')
<!--BEGIN CONTENT-->
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper">
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">
                    Training Item</div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->
        <!--BEGIN CONTENT-->
        <div class="page-content">
            <div id="tab-general">
                <div class="row text-center">
                    <div class="col-md-6 col-md-offset-3">
                        <form action="{{Route('training.valueitem')}}" method="post">
                            {{ csrf_field() }}
                            <div class="col-md-4" style="padding: 7px 0"><strong>User Record</strong></div>
                            
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="user_awal1" placeholder="Awal"required autofocus>
                            </div>

                            <div class="col-md-1" style="padding: 7px 0"><strong>s/d</strong></div>

                            <div class="col-md-3" style="margin-bottom:15px">
                                <input type="text" class="form-control" name="user_akhir1" placeholder="Akhir" required autofocus>
                            </div>

                            <div class="col-md-4" style="padding: 7px 0"><strong>Wisata Record</strong></div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="wisata_awal1" placeholder="Awal" required autofocus>
                            </div>

                            <div class="col-md-1" style="padding: 7px 0"><strong>s/d</strong></div>
                        
                            <div class="col-md-3" style="margin-bottom:15px">
                                <input type="text" class="form-control" name="wisata_akhir1" placeholder="Akhir" required autofocus>
                            </div>

                            <div class="col-md-3 col-md-offset-8">
                                <input type="submit" class="btn btn-primary btn-block" value="Hitung">
                            </div>
                        </form>
                    </div>
                </div>

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
                        <h2>Nilai Cosine</h2>          
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Wisata_id/Wisata_id</th>
                            @foreach($nilaiCosines as $wisataID => $cosines)
                                <th style="text-align:center">{{$wisataID}}</th>
                            @endforeach                                
                            </tr>
                            </thead>
                            <tbody>                                    
                                <tr>
                                    @foreach($nilaiCosines as $wisataID => $items)                                                                
                                        <td><strong>{{ $wisataID }}</strong></td>
                                    @foreach($items as $wisataID => $wisata)
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
                    <h2>Dara Rating Sebenarnya</h2>          
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="text-align:center">Wisata Id</th>
                            <th style="text-align:center">Rating</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dataSetRating as $rating)
                        <tr>                            
                            <td><strong>{{ $rating->wisata_id }}</strong></td>
                            <td>{{ $rating->rating }}</td>
                        </tr>
                        @endforeach                              
                        </tbody>
                    </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                    <h2>Nilai Predict Item Based</h2>          
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>User_id/Wisata_id</th>
                                @foreach($nilaiRatingsTerurutItem as $userID => $users)
                                @foreach($users as $wisataID => $wisata)
                                <th style="text-align:center">{{$wisataID}}</th>
                                @endforeach
                                @break
                                @endforeach                             
                            </tr>
                            </thead>
                            <tbody>                                    
                                <tr>
                                    @foreach($nilaiRatingsTerurutItem as $userID => $users) 
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
                                    <tr><th style="text-align:center;">MAE ITEM</th> <th colspan="100" style="text-align:center;">{{$nilaiMaeItem}} </th></tr>                                                         
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

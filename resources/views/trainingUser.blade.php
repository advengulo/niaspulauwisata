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
                <h2>T R A I N I N G</h2>
              </div>
            </div>
          </div>
        </div>
  </section><!-- #intro -->

  <!--==========================
    Skills Section
  ============================-->
  <section id="portfolio">
    <div class="container">
            <div class="row mbl">
                <div class="col-md-12">

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
                            <div class="col-md-12">                            
                            <h2>Nilai Predict User Based : <strong>{{Auth::user()->name}}</strong> </h2> </div>         
                            <div class="col-md-4">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Wisata ID</th>                            
                                        <th>Nilai Predict</th>                             
                                    </tr>
                                    </thead>
                                    <tbody>                                    
                                        <tr>
                                            @foreach($nilaiRatings as $userID => $user) 
                                                <td>{{ $userID }}</td>                                    
                                                @if($user - (int)$user != 0)    
                                                    <td>{{ number_format($user, 3, '.', ',') }}</td>
                                                @else
                                                    <td>{{$user}}</td>
                                                @endif
                                        </tr>
                                            @endforeach                                                         
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4"> Nilai Mae : {{$nilaiMae}} </div></div>
                        {{-- <div class="row">
                            <div class="col-md-4"> Nilai Mae Item : {{$nilaiMaeItem}} </div></div>  --}}
            </div> <!--END TAB CONTENT-->


    </div> <!--END CONTENT-->

    </div>
  </section>
@endsection

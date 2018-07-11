@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="img/profile/sampul/{{$user->profile['pro_sampulImg']}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>P R O F I L E</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section><!-- #intro -->

  <!--==========================
    Skills Section
  ============================-->
<section id="facts"  class="wow fadeIn">
    <div class="container">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-3 wow fadeInUp">
            <div class="about-col" >
              <div class="img">
                <img src="{{ URL::asset(Auth::user()->avatar) }}" alt="" class="img-avatar">
              </div>
            </div>
            <div class="portfolio-info">

            </div>
          </div>

          <div class=" col-md-9">
            <table class="table table-user-information">
              <tbody>
                <tr>
                  <td>Nama </td>
                  <td>: {{ $user->name }}</td>
                </tr>
                <tr>
                  <td>Tempat / Tanggal Lahir :</td>
                  <td>: {{ $user->profile['pro_tempatLahir']}},{{ $user->profile['pro_tglLahir']}}</td>
                </tr>
                <tr>
                  <td>Jenis Kelamin</td>
                  <td>: {{ $user->profile['pro_jenisKelamin']}}</td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td><textarea name="content" class="form-control">{{ $user->profile['pro_alamat']}}</textarea></td>
                </tr>

                <tr>
                  <td>Email</td>
                  <td><a href="{{ $user->email }}">: {{ $user->email }}</a></td>
                </tr>
                <tr>
                  <td>Nomor Telepon / Hp</td>
                  <td>: {{ $user->profile['pro_telp']}}  </td>
                </tr>
              </tbody>
            </table>

          </div>

        </div>
      </div>
      <div class="container"  style="text-align:center">
        <a href="/profileEdit" class="btn btn-primary"style="width:100px;">Edit</a>
      <div>

    </div>
</section>

@endsection

@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="{{asset($user->profile->pro_sampulImg)}}" alt=""></div>
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
<section id="portfolio"  class="wow fadeIn">
    <div class="container">
      <div class="panel-body">
      <form  action="{{route('profile.update', $user)}}" method="post" enctype="multipart/form-data"> <!--//star form post-->
          {{ csrf_field() }}
          {{ method_field('PATCH') }}          
          <div class="row">
            <div class="col-md-3 wow fadeInUp">
              <div class="about-col">
                <div class="img">
                  <img src="{{ URL::asset(Auth::user()->avatar) }}" alt="" class="img-avatar">
                  <input style="padding-top: 4%" type="file" name="avatar">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>Nama </td>
                    <td><input type="text" class="form-control"  placeholder="Nama Anda" name="name" value="{{ $user->name }}"></td>
                  </tr>
                  <tr>
                    <td>Tempat / Tanggal Lahir </td>
                    <td class="row">
                            <div class="col-md-6">
                              <input type="text" class="form-control"  placeholder="" name="ttl" value="{{ $user->profile['pro_tempatLahir']}}" style="width=12px;">
                            </div>
                            <div class="col-md-6">
                                <input type="date" class="form-control"  placeholder="dd/mm/yyyy" name="date" value="{{ $user->profile['pro_tglLahir']}}">
                            </div>                    
                    </td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="text" class="form-control"  placeholder="" name="gender" value="{{ $user->profile['pro_jenisKelamin']}}" disabled>
                        <input type="radio" name="gender" value="Laki-Laki"> Laki-Laki<br>
                        <input type="radio" name="gender" value="Perempuan"> Perempuan<br>
                    </td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td><textarea class="form-control" placeholder="" name="alamat"> {{ $user->profile['pro_alamat']}}</textarea></td>
                  </tr>

                  <tr>
                    <td>Email</td>
                    <td><input type="text" class="form-control"  placeholder="" name="email" value="{{ $user->email }}"></td>
                  </tr>
                  <tr>
                    <td>Nomor Telepon / Hp</td>
                    <td><input type="tel" type="tel" required pattern="^\d{12}$" title="Nomor Telepon / HP harus angka dan 12 digit "  class="form-control"  placeholder="" name="phone" value="{{ $user->profile['pro_telp']}}"></td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-md-offset-6">
              <input type="submit" class="btn btn-primary" value="Simpan" style="width:100%">
            </div>
            {{ csrf_field() }}
          </div>
      </form> <!--end form post-->
      </div>
    </div>
</section>

@endsection

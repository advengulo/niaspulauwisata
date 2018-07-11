@extends('layouts.layout')

@section('content')
<section id="intro" style="height:50vh;">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="height:50vh;">
            <div class="carousel-background"><img src="" alt=""></div>
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
        <form  method="post" action="/profile" enctype="multipart/form-data"> <!--//star form post-->
        <div class="row">
            <div class="col-md-3 wow fadeInUp">
              <div class="about-col">
                <div class="img">
                  <img src="{{ URL::asset(Auth::user()->avatar) }}" alt="" class="img-avatar">
                  <input type="file" name="avatar">
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
                    <td ><input type="text" class="form-control"  placeholder="{{ $user->profile['pro_tempatLahir']}}" name="" value="" style="width=12px;"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="text" class="form-control"  placeholder="{{ $user->profile['pro_tglLahir']}}" name="" value=""></td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="text" class="form-control"  placeholder="{{ $user->profile['pro_jenisKelamin']}}" name="title" value=""></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td><textarea name="content" class="form-control" placeholder="{{ $user->profile['pro_alamat']}}"></textarea></td>
                  </tr>

                  <tr>
                    <td>Email</td>
                    <td><input type="text" class="form-control"  placeholder="{{ $user->email }}" name="title" value=""></td>
                  </tr>
                  <tr>
                    <td>Nomor Telepon / Hp</td>
                    <td><input type="text" class="form-control"  placeholder="{{ $user->profile['pro_telp']}}" name="title" value=""></td>
                  </tr>
                </tbody>
              </table>

              <div class="form-group">
                  <input type="submit" class="btn btn-primary" />
              </div>

            </div>
            {{ csrf_field() }}

        </div>
      </form> <!--end form post-->
      </div>
    </div>
</section>

@endsection

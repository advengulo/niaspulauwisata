@extends('layouts.dashboardLayout')

@section('content')
    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper">
        <!--BEGIN TITLE & BREADCRUMB PAGE-->
        <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
            <div class="page-header pull-left">
                <div class="page-title">
                    User Control </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--END TITLE & BREADCRUMB PAGE-->
    <!--BEGIN CONTENT-->
    <div class="page-content">
      <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($data as $user)
                <tr>
                  @if ($user->admin==false)
                  <td>
                    {{$user->id}}</td>

                  <td> {{$user->name}}</td>
                  <td>
                    <img src="{{ URL::asset($user->avatar) }}" alt="" class="imgUserDashboard">
                  </td>
                  <td>
                    @if ($user->admin==true)
                      <p>Admin<p>
                    @else
                      <p>User</p>
                    @endif
                  </td>

                  <td> {{$user->email}} </td>
                  <td class="col-md-1">
                    <div class="row">
                      <div class="col-md-5">
                        <form action="{{ route('user.destroy', $user->id)}}" method="post">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                          <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i> Hapus </button>
                        </form>
                      </div>
                    </div>
                  </td>
                  @endif
                </tr>
                @endforeach
              </tbody>
              <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Role</th>
                    <th>Email</th>
                  </tr>
              </tfoot>
          </table>
      </div>
    </div>
        <!--END CONTENT-->
    </div>
    <!--END PAGE WRAPPER-->
</div>
@endsection

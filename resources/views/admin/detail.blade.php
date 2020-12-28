@extends('template_admin.home')
@section('title', 'Detail Pelamar')

@section('content')
<!-- CARD ID -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-danger card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle"
              src="{{ asset('storage/uploads/images/'.$pelamar->upload_foto)}}"
              alt="User profile picture">
            </div>

            <h3 class="profile-username text-center">{{$pelamar->nama_lengkap}}</h3>

            <p class="text-muted text-center">NIK.<a>{{$pelamar->nik}}</a></p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <a href="{{ asset('storage/uploads/files/'.$pelamar->upload_file)}}" class="btn btn-danger btn-block"><b>Data Identitas Diri</b></a>
              </li>
            </ul>

            <a href="{{route('admin.cetak', ['pelamar'=>$pelamar->nik])}}" class="btn btn-danger btn-block"><b>Export to PDF</b></a>
          </div>
        </div>
      </div>

      <!-- Kolom Biodata -->
      <div class="col-md-9">
        <div class="card card-solid">
          <div class="card-body pb-0">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><b>Informasi Data Diri Calon Pelamar</b></li>
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form class="form-horizontal">
                  <div class="form-group row">
                    <label  class=" col-sm-2">NIK</label>
                    <div class="col-sm-10">
                      <label>:</label>
                      <label>{{$pelamar->nik}}</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class=" col-sm-2">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <label>:</label>
                      <label>{{$pelamar->nama_lengkap}}</label>
                    </div>
                  </div>                      
                  <div class="form-group row">
                    <label  class=" col-sm-2">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <label>:</label>
                      <label>{{$pelamar->jenis_kelamin =='P' ? 'Perempuan' : 'Laki-laki' }}</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class=" col-sm-2">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <label>:</label>
                      <label>{{$pelamar->tempat_lahir}}</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class=" col-sm-2">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <label>:</label>
                      <label>{{$pelamar->tanggal_lahir}}</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class=" col-sm-2">Alamat</label>
                    <div class="col-sm-10">
                      <label>:</label>
                      <label>{{$pelamar->alamat}}</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class=" col-sm-2">Email</label>
                    <div class="col-sm-10">
                      <label>:</label>
                      <label>{{$pelamar->email}}</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class=" col-sm-2">No.Telepon</label>
                    <div class="col-sm-10">
                      <label>:</label>
                      <label>{{$pelamar->no_hp}}</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class=" col-sm-2">Pendidikan Terakhir</label>
                    <div class="col-sm-10">
                      <label>:</label>
                      <label>{{$pelamar->pendidikan_terakhir}}</label>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label  class=" col-sm-2">Minat Karir</label>
                    <div class="col-sm-10">
                      <label>:</label>
                      <label>{{$pelamar->minat_karir}}</label>
                    </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection


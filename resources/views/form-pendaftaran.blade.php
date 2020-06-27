@extends('layouts.app')

@section('content')

<div class="top-shadow"></div>
    <div class="inner-page">
    <div class="slider-item" style="background-image: url('assets/images/slider_3.jpg');">
    </div>
    </div>
<!-- END slider -->
{{-- CONTENT FORM --}}
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-12">
                <h1 class="col-md-12 text-center"> Formulir Pendaftaran Pegawai Baru</h1>
                <hr>

                <form style="margin:50px;" action="{{ route('pelamars.store')}} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nik"> Nomor Induk Kependudukan</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik')}}" placeholder="Masukkan Nomor induk Kependudukan Anda ">
                        @error('nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" name="nama_lengkap"  value="{{ old('nama_lengkap')}}" placeholder="Masukkan Nama Lengkap ">
                        @error('nama_lengkap')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir')}}" placeholder="Masukkan Tempat Lahir">
                                @error('tempat_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror " id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir')}}" placeholder="Masukkan Tanggal Lahir">
                                @error('tanggal_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                            <div class="custom-control-inline custom-radio ml-4">
                                <input type="radio" class="custom-control-input" name="jenis_kelamin"  id="laki_laki" value="L" {{old('jenis_kelamin')=='L'?'checked':''}} >
                                <label class="custom-control-label" for="laki_laki">Laki-laki</label>
                            </div>
                            <div class="custom-control-inline custom-radio ml-4">
                                <input type="radio" class="custom-control-input" name="jenis_kelamin" id="perempuan"  value="P" {{old('jenis_kelamin')=='P'?'checked':''}} >
                                <label class="custom-control-label" for="perempuan">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat </label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" rows="3" name="alamat" placeholder="Masukkan Alamat Tempat Tinggal Saat ini">{{old('alamat')}}</textarea>
                        @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror " id="email" name="email" value="{{ old('email')}}" placeholder="Masukkan E-mail ">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_hp">Nomor Telepon / WhatsApp </label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror " id="no_hp" name="no_hp" value="{{ old('no_hp')}}" placeholder="Masukkan Nomor yang Bisa Dihubungi Oleh Kami">
                                @error('no_hp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                        <input type="text" class="form-control @error('pendidikan_terakhir') is-invalid @enderror" id="pendidikan_terakhir" name="pendidikan_terakhir" value="{{ old('pendidikan_terakhir')}}" placeholder="Masukkan Pendidikan Terakhir">
                        <small>* Mohon Sertakan Nama Sekolah </small>
                        @error('pendidikan_terakhir')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="minat_karir">Minat Karir Anda</label>
                        <select class="form-control @error('minat_karir') is-invalid @enderror" name="minat_karir" id="minat_karir">
                            <option value="Customer Support" {{old('minat_karir')=='customer_support'?'selected' : ''}} >Customer Support</option>
                            <option value="Finance and Administration" {{old('minat_karir')=='finance_and_administration'?'selected':''}} >Finance and Administration</option>
                            <option value="Programmer" {{old('minat_karir')=='programmer'?'selected':''}} >Programmer</option>
                            <option value="Web Designer" {{old('minat_karir')=='web_designer'?'selected':''}} >Web Designer</option>
                        </select>
                        @error('minat_karir')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="upload_gambar">Upload Foto Profile</label>
                            <div class="custom-file">
                                <input type="file" id="upload_foto" name="upload_foto" accept="image/*" class="custom-file-input @error('upload_foto') is-invalid @enderror">
                                <label class="custom-file-label col-md-12" for="upload_foto" onchange="$ ('#upload_foto').val($(this).val());">
                                    {{ $user->upload_foto ?? 'Upload Foto'}}
                                </label>
                                <small>* Upload Foto harus berukuran 3x4 serta Latar Belakang berwarna Merah atau Biru.</small>
                                @error('upload_foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                            </div>
                    </div>
                    <div class="form-group">
                        <label for="upload_file">Upload File</label>
                            <div class="custom-file">
                                <input type="file" id="upload_file" name="upload_file" class="custom-file-input @error('upload_file') is-invalid @enderror">
                                <label class="custom-file-label col-md-12" for="upload_file" onchange="$   ('upload_file').val($this).val());">
                                {{ $user->upload_file ?? 'Upload File Anda'}}
                                </label>
                                <small>*  Upload File ini diperuntukan untuk Identitas Diri berupa Data Scan (KTP, Ijazah, Sertifikat yang dilegalisir, SKCK, Surat Keterangan Sehat) yang dijadikan Satu File dengan Format PDF.</small>
                                @error('upload_file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Daftar Sekarang !</button>
                </form>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
    </body>
@endsection

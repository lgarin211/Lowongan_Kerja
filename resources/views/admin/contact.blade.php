@extends('template_admin.home')
@section('title', 'Data Kontak Pelamar')

@section('content')
<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="card card-solid">
    <div class="card-body pb-0">
      <div class="row d-flex align-items-stretch">
        @foreach($pelamar as $result)
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
          <div class="card bg-light">
            <div class="card-header text-muted border-bottom-0">
            NIK. {{$result->nik}}
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col-7">
                  <h2 class="lead"><b>{{$result->nama_lengkap}}</b></h2>
                  <hr>
                  <ul class="ml-4 mb-0 fa-ul text-muted">
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-address-card"></i></span><b>{{$result->minat_karir}}</b></li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-graduation-cap"></i></span><b>{{$result->pendidikan_terakhir}}</b></li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span><b>{{$result->no_hp}}</b></li>
                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span><b>{{$result->email}}</b></li>
                  </ul>
                </div>
                <div class="col-5 text-center">
                  <img src="{{ asset('storage/uploads/images/'.$result->upload_foto)}}" alt="" class="img-circle img-fluid">
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="text-right">
                <a href="{{route('admin.show', ['pelamar'=>$result->id])}}" class="btn btn-sm btn-primary">
                  <i class="fas fa-user"></i> Lihat Biodata
                </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <!-- /.card-body -->
<!--     <div class="card-footer">
      <nav aria-label="Contacts Page Navigation">
        <ul class="pagination justify-content-center m-0">
          <li class="page-item active"><a class="page-link" href="/pelamar/contact">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item"><a class="page-link" href="#">6</a></li>
          <li class="page-item"><a class="page-link" href="#">7</a></li>
          <li class="page-item"><a class="page-link" href="#">8</a></li>
        </ul>
      </nav>
    </div> -->
    <!-- /.card-footer -->
  </div>
  <!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</body>
</html>


@endsection

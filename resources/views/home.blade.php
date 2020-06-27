@extends('template_admin.home')
@section('title', 'Dashboard')
@section('sub-judul', 'Dashboard')

@section('content')

     <!-- Main content -->
     <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-3">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3> Menu </h3>
  
                  <p>Data Pelamar</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="{{ route('admin.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
        
            <div class="col-md-3">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3> Menu </h3>
  
                  <p>Kontak Pelamar</p>
                </div>
                <div class="icon">
                  <i class="ion ion-monitor"></i>
                </div>
                <a href="{{ route('admin.contact') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->

        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
      

@endsection

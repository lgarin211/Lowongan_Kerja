@extends('template_admin.home')
@section('title', 'Table Pelamar')
@section('sub-judul', 'Table Pelamar')

@section('content')

    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body table-responsive p-0">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Minat Karir</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($pelamar as $result)

                    <tr>
                        <td>{{ $result->nik }}</td>
                        <td>{{ $result->nama_lengkap }}</td>
                        <td>{{ $result->pendidikan_terakhir }}</td>
                        <td>{{ $result->minat_karir }}</td>
                        <td>

                            <div class="btn-action">
                            <a href="{{ route("admin.show", ['pelamar' => $result->id] ) }}" class="btn btn-primary d-inline-block"><i class="fa fa-file"></i>
                                  Show
                            </a>
                            <button class="btn btn-danger btn-hapus" data-id="{{ $result->id }}" data-toggle="modal" data-target="#DeleteModal-{{ $result->id}}"><i class="fa fa-user-times"></i>
                                  Hapus
                              </button>
                            </div>
                        </td>
                    </tr>

                    {{-- modal untuk konfirmasi --}}
              
                  <div id="DeleteModal-{{ $result->id}}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                          {{-- Content / Isi Modal --}}
                          <form action="{{ route("admin.destroy", ['pelamar' => $result->id]) }}" method="POST">
                              @csrf
                              @method('delete')
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h4 class="modal-title text-center">Konfirmasi</h4>
                                      <button type="button" class="close" data-dismiss="modal">
                                          &times;</button>
                                  </div>
                                  <div class="modal-body">
                                      <p class="text-center"> Anda yakin akan menghapus data ini ? </p>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-success" data-dismiss="modal">
                                          Batalkan
                                      </button>
                                      <button type="submit" class="btn btn-danger" onclick="this.form.submit()" data-dismiss="modal">
                                          Ya, Hapus</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
                  
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->


      {{ $pelamar->links() }}


@endsection


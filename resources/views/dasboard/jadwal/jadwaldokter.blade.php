@extends('master/dasboard.app')
@section('head')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('dasboard/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('dasboard/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('content')
<div class="container">
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
            Tambah Jadwal Dokter
          </button>
    </div><br>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Masukkan Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{route('jadwal.savejadwal')}}" method="POST" class="w-full gap-4 flex flex-col" enctype="multipart/form-data">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Hari</label>
                        <select class="form-control select2bs4" name="hari" style="width: 100%;">
                          <option value="Senin" selected="selected">Senin</option>
                          <option value="Selasa">Selasa</option>
                          <option value="Rabu">Rabu</option>
                          <option value="Kamis">Kamis</option>
                          <option value="Jumat">Jumat</option>
                          <option value="Sabtu">Sabtu</option>
                          <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label>Nama Poli</label>
                      <select class="form-control select2bs4" name="poli" style="width: 100%;">
                        @forelse ($polis as $poli)
                        <option value="{{$poli->nama}}">{{$poli->nama}}</option>
                        @empty
                        @endforelse
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Nama Dokter</label>
                      <select class="form-control select2bs4" name="dokter" style="width: 100%;">
                        @forelse ($dokters as $dokter)
                        <option value="{{$dokter->nama_dokter}}">{{$dokter->nama_dokter}}</option>
                        @empty
                        @endforelse
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="">Jam</label>
                        <input type="text" class="form-control" name="jam">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
      <!-- /.modal -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Jadwal Dokter RS</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="row">#</th>
                        <th>Hari</th>
                        <th>Poli</th>
                        <th>Dokter</th>
                        <th>Jam</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($jadwals as $jadwal)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$jadwal->hari}}</td>
                        <td>{{$jadwal->poli}}</td>
                        <td>{{$jadwal->dokter}}</td>
                        <td>{{$jadwal->jam}}</td>
                        <td>
                            <a href="{{route('jadwal.edit',['id'=>$jadwal->id])}}" class="btn btn-secondary">Edit</a>
                            <form action="{{route('jadwal.delete',['id'=>$jadwal->id])}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="delete">
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                        </tr>
                        @empty
                        @endforelse
                </tbody>
            </table>
        </div>
    <!-- /.card-body -->
    </div>
</div>


@endsection
@section('js')
<!-- Select2 -->
<script src="{{ asset('dasboard/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
</script>

<script>
    $(function () {  
      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })
    })
  </script>

@endsection
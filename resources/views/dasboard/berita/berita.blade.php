@extends('master/dasboard.app')
@section('content')

<div class="container">
  <br><div>
    <a href="{{route('berita.add')}}" class="btn btn-primary">Tambah Berita</a>
  </div><br>
  <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th scope="row">#</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Deskripsi Singkat</th>
                    <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  @forelse ($beritas as $berita)
                  <tr>
                      <th scope="row">{{$loop->index+1}}</th>
                      <td>{{$berita->judul}}</td>
                      <td>{{$berita->tanggal}}</td>
                      <td>{{$berita->deskripsi_singkat}}</td>
                      <td>
                        <a href="{{route('berita.edit',['id'=>$berita->id])}}" class="btn btn-secondary">Edit</a>
                        <a href="{{route('berita.detail',['id'=>$berita->id])}}" class="btn btn-success">Detail</a>
                        <form action="#" method="post">
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
@endsection
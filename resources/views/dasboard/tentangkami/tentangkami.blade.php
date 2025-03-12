@extends('master/dasboard.app')
@section('content')

<div class="container">
  <div>
    <a href="{{route('about.add')}}" class="btn btn-primary">Tambah Data Dokter</a>
  </div> <br>
  <div class="card">
      <div class="card-header">
        <h3 class="card-title">List Tentang RS</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
                  <tr>
                    <th scope="row">#</th>
                    <th>Link</th>
                    <th>Gambar Sampul</th>
                  </tr>
              </thead>
              <tbody>
                  @forelse ($about as $tentang)
                  <tr>
                      <th scope="row">{{$loop->index+1}}</th>
                      <td>{{$tentang->linkyoutube}}</td>
                      <td><img src="{{ url('/about/'.$tentang->gambar) }}" width="200" height="200" alt=""></td>
                      <td>
                        <a href="{{route('about.edit',['id'=>$tentang->id])}}" class="btn btn-secondary">Edit</a>
                        <a href="#" class="btn btn-success">Detail</a>
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
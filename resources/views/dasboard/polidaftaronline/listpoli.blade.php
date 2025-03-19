@extends('master/dasboard.app')
@section('content')

<div class="container">
  <a href="{{route('listpoli.add')}}" class="btn btn-primary">Tambah Poli Daftar Online</a>
</div> <br>
<div class="card">
  <div class="card-header">
    <h3 class="card-title">List Poliklinik</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
          <thead>
              <tr>
                <th scope="row">#</th>
                <th>Nama Poli</th>
                <th>Aksi</th>
              </tr>
          </thead>
          <tbody>
            @forelse ($polis as $poli)
            <tr>
              <th scope="row">{{$loop->index+1}}</th>
              <td>{{$poli->nama}}</td>
              <td>
                <a href="{{route('listpoli.edit',['id'=>$poli->kd_poli])}}" class="btn btn-secondary">Edit</a>
                <form action="{{route('listpoli.delete',['id'=>$poli->kd_poli])}}" method="post">
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

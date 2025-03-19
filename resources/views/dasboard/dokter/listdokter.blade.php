@extends('master/dasboard.app')
@section('head')
@endsection

@section('content')
<div class="container">
    <div>
        <a href="{{route('dokter.add')}}" class="btn btn-primary">Tambah Data Dokter</a>
    </div> <br>

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
                        <th>Nama Dokter</th>
                        <th>Poli</th>
                        <th>Keterangan</th>
                        <th>gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dokters as $dokter)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$dokter->nama_dokter}}</td>
                        <td>{{$dokter->poli}}</td>
                        <td>{{$dokter->keterangan}}</td>
                        <td>
                            <img width="400px" src="{{ url('/dokter/'.$dokter->gambar) }}" alt="">
                        </td>
                        <td>
                            <a href="{{route('dokter.edit',['id'=>$dokter->id])}}" class="btn btn-secondary">Edit</a>
                            <a href="#" class="btn btn-success">Detail</a>
                            <form action="{{route('dokter.delete',['id'=>$dokter->id])}}" method="post">
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
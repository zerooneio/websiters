@extends('master/dasboard.app')
@section('head')
@endsection

@section('content')
<div class="container">
    <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Tambah Data Dokter</h3>
    
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form action="{{route('dokter.savedokter')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Nama Dokter</label>
                <input type="text" class="form-control col-md-6" name="nama_dokter">
            </div>
            <div class="form-group">
                <label for="">Poli</label>
                <input type="text" class="form-control col-md-6" name="poli">
            </div>
            <div class="form-group">
                <label for="">Deskripsi Singkat Dokter</label>
                <textarea name="keterangan" class="form-control" style="height: 100px"></textarea>
            </div>
            <div class="form-group col-md-6">
              <label for="exampleInputFile">Foto Dokter</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Foto Dokter</label>
                </div>
              </div>
            </div>
            <div class="from-group">
              <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
    </div>
</div>

@endsection
@section('js')
<script src="{{ asset('/dasboard/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>
@endsection

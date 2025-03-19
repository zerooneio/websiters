@extends('master/dasboard.app')
@section('head')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('dasboard/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('dasboard/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
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
          <form action="{{route('dokter.update', ['id'=>$dokters->id])}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="">Nama Dokter</label>
                <input type="text" class="form-control col-md-6" name="nama_dokter" value="{{$dokters->nama_dokter}}">
            </div>
            <div class="form-group">
              <label>Nama Poli</label>
              <select class="form-control select2bs4" name="poli" style="width: 100%;">
                <option selected="{{$dokters->poli}}">{{$dokters->poli}}</option>
                @forelse ($polis as $poli)
                <option value="{{$poli->nama}}">{{$poli->nama}}</option>
                @empty
                @endforelse
              </select>
            </div>
            <div class="form-group">
                <label for="">Deskripsi Singkat Dokter</label>
                <textarea name="keterangan" class="form-control" style="height: 100px">{{$dokters->keterangan}}</textarea>
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
<script src="{{ asset('dasboard/plugins/select2/js/select2.full.min.js') }}"></script>

<script>
  $(function () {
    bsCustomFileInput.init();
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

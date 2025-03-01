@extends('master/dasboard.app')
@section('head')
 <!-- summernote -->
 <link rel="stylesheet" href="{{ asset('dasboard/plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('content')

<h1>BERHASIL HALAMAN BERITA</h1>

<div class="col-md-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title">Masukkan Berita Informasi Terkini</h3>
      </div>
      <form action="{{route('berita.saveberita')}}" method="POST" class="w-full gap-4 flex flex-col" enctype="multipart/form-data">
        <!-- /.card-header -->
        {{ csrf_field() }}
        <div class="card-body">
          <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control col-md-6" name="judul" placeholder="JUDUL BERITA">
          </div>
          <div class="form-group">
            <label for="">Tanggal Terbit</label>
            <input type="date" class="form-control col-md-6" name="tanggal">
          </div>
          <div class="form-group">
            <label for="">Deskripsi Singkat</label>
            <input class="form-control" name="deskripsi_singkat" placeholder="Deskripsi Singkat:">
          </div>
          <div class="form-group">
              <textarea id="compose-textarea" name="deskripsi" class="form-control" style="height: 300px">
                
              </textarea>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="float-right">
            <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Simpan</button>
          </div>
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->
  </div>
@endsection

@section('js')
<!-- Summernote -->
<script src="{{ asset('/dasboard/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
@endsection
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
      <form action="{{route('berita.update', ['id'=>$beritas->id])}}" method="POST" class="w-full gap-4 flex flex-col" enctype="multipart/form-data">
        <!-- /.card-header -->
        {{ csrf_field() }} 
        <input type="hidden" name="_method" value="put">
        <div class="card-body">
          <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control col-md-6" value="{{$beritas->judul}}" name="judul" placeholder="JUDUL BERITA">
          </div>
          <div class="form-group">
            <label for="">Tanggal Terbit</label>
            <input type="date" class="form-control col-md-6" value="{{$beritas->tanggal}}" name="tanggal">
          </div>
          <div class="form-group">
            <label for="">Deskripsi Singkat</label>
            <input class="form-control" value="{{$beritas->deskripsi_singkat}}" name="deskripsi_singkat" placeholder="Deskripsi Singkat:">
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="gambar" id="customFile">
            <label class="custom-file-label col-md-6" for="customFile">Gambar Sampul</label>
          </div>
          <div class="form-group">
            <br><label for="">Isi Berita</label>
              <textarea id="compose-textarea" name="deskripsi" class="form-control" style="height: 300px">
                {{$beritas->deskripsi}}
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
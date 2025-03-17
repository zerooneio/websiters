@extends('master/dasboard.app')
@section('head')
 <!-- summernote -->
 <link rel="stylesheet" href="{{ asset('dasboard/plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('content')

<div class="col-md-12">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title">Edit Profil RS</h3>
      </div>
      <form action="{{route('about.update', ['id'=>$about->id])}}" method="POST" class="w-full gap-4 flex flex-col" enctype="multipart/form-data">
        <!-- /.card-header -->
        {{ csrf_field() }}
        <div class="card-body">
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="gambar" id="customFile">
            <label class="custom-file-label col-md-6" for="customFile">Sampul Youtube</label>
          </div>
          <div class="form-group">
            <br><label for="">Link Youtube</label>
            <input type="text" class="form-control col-md-6" name="linkyoutube" value="{{$about->linkyoutube}}">
          </div>
          <div class="form-group">
            <label for="">Deskripsi</label>
              <textarea id="compose-textarea" name="deskripsi" class="form-control" style="height: 300px">
              {{$about->deskripsi}}
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
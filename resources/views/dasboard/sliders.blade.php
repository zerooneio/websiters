@extends('master.app')
@section('content')

<h1>menu slide bar</h1>

<div class="container">
    <form action="http://localhost:8000/sliders" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="VXGHj7hHkCgHMNjHAQKscIoSPIcvYPtNt3YaLfZg" autocomplete="off">
        <div class="col-md-6 form-group">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" required>
        </div> <br>
        <div class="col-md-6 form-group">
            <label>Deskripsi</label> <br>
            <textarea name="deskripsi" id="" cols="64%" rows="6"></textarea>
        </div> <br>
        <div class="col-md-6 form-group">
            <label>Upload Gambar</label>
            <input type="file" name="gambar" class="form-control" required>
        </div> <br>
        <div class="col-md-6 form-group">
            <button type="submit" class="btn btn-block btn-primary">Simpan</button>
        </div>
    </form>
</div>

@endsection
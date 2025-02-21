@extends('master.app')
@section('content')

<h1>menu slide bar</h1>

<div class="container">
    <form action="{{route('sliders.update', ['id'=>$slider->kd_sliders])}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-md-6 form-group">
            <label>Judul</label>
            <input type="text" name="judul" value="{{$slider->judul}}" class="form-control" placeholder="Masukkan Judul" required>
        </div> <br>
        <div class="col-md-6 form-group">
            <label>Deskripsi</label> <br>
            <textarea name="deskripsi" cols="64%" rows="6">{{$slider->deskripsi}}</textarea>
        </div> <br>
        <div class="col-md-6 form-group">
            <label>Upload Gambar</label>
            <input type="file" name="gambar" class="form-control" value="{{$slider->gambar}}">
        </div> <br>
        <div class="col-md-6 form-group">
            <label>Pilih Status</label>
            <select name="status_aktif" class="form-select" required>
                <option value="{{$slider->status_aktif}}" selected>Pilih Status</option>
                <option value="carousel-item active">Utama</option>
                <option value="carousel-item">Penunjang</option>
            </select>
        </div> <br>
        <div class="col-md-6 form-group">
            <button type="submit" class="btn btn-block btn-primary">Simpan</button>
        </div>
    </form>
</div>

@endsection
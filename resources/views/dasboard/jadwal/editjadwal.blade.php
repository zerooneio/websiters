@extends('master/dasboard.app')
@section('head')
@endsection

@section('content')
<div class="container">
    <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">Edit Jadwal Dokter</h3>
    
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
          <form action="{{route('jadwal.update', ['id'=>$jadwals->id])}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Hari</label>
                <select class="form-control select2bs4" name="hari" style="width: 100%;">
                  <option value="Senin" selected="selected">{{$jadwals->hari}}</option>
                  <option value="Selasa">Senin</option>
                  <option value="Selasa">Selasa</option>
                  <option value="Rabu">Rabu</option>
                  <option value="Kamis">Kamis</option>
                  <option value="Jumat">Jumat</option>
                  <option value="Sabtu">Sabtu</option>
                  <option value="Minggu">Minggu</option>
                </select>
            </div>
            <div class="form-group">
              <label>Nama Poli</label>
              <select class="form-control select2bs4" name="poli" style="width: 100%;">
                @forelse ($polis as $poli)
                <option value="{{$poli->nama}}">{{$poli->nama}}</option>
                @empty
                @endforelse
              </select>
            </div>
            <div class="form-group">
                <label for="">Dokter</label>
                <input type="text" class="form-control" name="dokter" value="{{$jadwals->dokter}}" required>
            </div>
            <div class="form-group">
                <label for="">Jam</label>
                <input type="text" class="form-control" name="jam" value="{{$jadwals->jam}}" required>
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
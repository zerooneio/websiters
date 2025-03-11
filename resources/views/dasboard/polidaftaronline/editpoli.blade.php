@extends('master/dasboard.app')
@section('content')


<div class="container">
    <h1>Update Poli</h1>

    <div class="row">
        <form action="{{route('listpoli.update', ['id'=>$listpoli->kd_poli])}}" method="POST" class="w-full gap-4 flex flex-col" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Nama Poli</label>
                <input type="text" name="poli" class="form-control" id="poli" value="{{$listpoli->nama}}" placeholder="Masukkan Nama Poli" required>
            </div>
            <br>
            <div class="col-md-6 form-group">
                <button type="submit" class="btn btn-block btn-primary">Simpan</button>
            </div>
        </form>

    </div>

</div>

@endsection
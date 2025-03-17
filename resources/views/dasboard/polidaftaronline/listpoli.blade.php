@extends('master/dasboard.app')
@section('content')

<div class="container">
  <div>
    <a href="{{route('listpoli.add')}}" class="btn btn-primary">Tambah Poli Daftar Online</a>
  </div> <br>
    <table class="table">
        <caption>List Poliklinik</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Poli</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($polis as $poli)
          <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$poli->nama}}</td>
            <td>
              <a href="{{route('listpoli.edit',['id'=>$poli->kd_poli])}}" class="btn btn-secondary">Edit</a>
              <form action="{{route('listpoli.delete',['id'=>$poli->kd_poli])}}" method="post">
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
@endsection

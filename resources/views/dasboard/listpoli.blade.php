@extends('master.app')
@section('content')
<div class="container">

    <div>
        <a href="{{route('listpoli.add')}}" class="btn btn-block btn-primary">Tambah Dokter</a>
    </div>
    <table class="table">
        <caption>List Poliklinik</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Poli</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($polis as $poli)
          <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$poli->nama}}</td>
          </tr>
          @empty
          @endforelse
        </tbody>
      </table>
</div>
@endsection

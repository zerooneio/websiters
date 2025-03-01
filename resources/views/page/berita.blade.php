@extends('master.app')
@section('content')

<br>
<div class="container">
    <h1>{{$beritas->judul}}</h1>
    <small>{{$beritas->tanggal}}</small>
</div>
<hr>
<div class="container">
    {!!$beritas->deskripsi!!}
</div>

@endsection
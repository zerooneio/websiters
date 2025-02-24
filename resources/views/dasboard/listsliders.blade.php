@extends('master.app')
@section('content')

<div class="container">

    <div>
        <a href="{{route('sliders.add')}}" class="btn btn-block btn-primary">Tambah Gambar Slide</a>
    </div>
    <table class="table">
        <caption>List Gambar Slide</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Gambar</th>
            <th scope="col">Status Aktif</th>
            <th scope="col">Fungsi</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($sliders as $slider)
          <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td class="col-md-2">{{$slider->judul}}</td>
            <td>{{$slider->deskripsi}}</td>
            <td class="col-md-2">
              <img width="400px" src="{{ url('/data_file/'.$slider->gambar) }}" alt="">
            </td>
            <td class="col-md-2">
              @if ($slider->status_aktif === 'carousel-item')
                  Utama
              @else
                  Penunjang
              @endif
            </td>
            <td>
                <a href="{{route('sliders.edit',['id'=>$slider->kd_sliders])}}" class="btn btn-secondary">Edit</a>
                <form action="#" method="post">
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
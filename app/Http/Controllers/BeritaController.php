<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{

    public function list()
    {
        $beritas = berita::orderBy('tanggal', 'desc')->get();

        return view('dasboard/berita.berita', compact('beritas'));
    }

    public function add()
    { 
        return view('dasboard/berita.addberita');
    }

    public function saveberita(Request $request)
    { 
        // dd($request);
        $validated = $request->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'deskripsi_singkat' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);
        if ($validated){
            $file = $request->file('gambar');
            berita::create([
                'judul' => $request->judul,
                'tanggal' => $request->tanggal,
                'deskripsi_singkat' => $request->deskripsi_singkat,
                'deskripsi' => $request->deskripsi,
                'gambar' => $file->getClientOriginalName(),
            ]);
            $tujuan_upload = 'berita';
            $file->move($tujuan_upload,$file->getClientOriginalName());
            return redirect(route('berita.list'));
        }
    }

    public function edit($id)
    {
        $beritas = berita::find($id);

        return view('dasboard/berita.editberita',compact('beritas'));
    }

    public function update(Request $request, $id)
    { 
        // dd($request);
        $validated = $request->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'deskripsi_singkat' => 'required',
            'deskripsi' => 'required',
        ]);
        if ($validated){
            $beritas = berita::find($id);
            if (is_null($request->file('gambar'))) {
                $beritas->judul = $request->judul ;
                $beritas->tanggal = $request->tanggal ;
                $beritas->deskripsi_singkat = $request->deskripsi_singkat ;
                $beritas->deskripsi = $request->deskripsi ;
                $beritas->save();
                return redirect(route('berita.list'));
            }
            else{
                $file = $request->file('gambar');
                $beritas->judul = $request->judul ;
                $beritas->tanggal = $request->tanggal ;
                $beritas->deskripsi_singkat = $request->deskripsi_singkat ;
                $beritas->deskripsi = $request->deskripsi ;
                $beritas->gambar = $file->getClientOriginalName();
                $beritas->save();
                $tujuan_upload = 'berita';
                $file->move($tujuan_upload,$file->getClientOriginalName());
                return redirect(route('berita.list'));
            }
        }
    }

    public function delete($id)
    {
        $listpoli = berita::destroy($id);

        return redirect(route('berita.list'));
    }

}

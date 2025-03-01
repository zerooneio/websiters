<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = berita::all();

        return view('page.berita', compact('berita'));
    }

    public function detail($id)
    {
        $beritas = berita::find($id);

        return view('page.berita',compact('beritas'));
    }

    public function list()
    {
        $beritas = berita::all();

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
        ]);
        if ($validated){
            berita::create([
                'judul' => $request->judul,
                'tanggal' => $request->tanggal,
                'deskripsi_singkat' => $request->deskripsi_singkat,
                'deskripsi' => $request->deskripsi,
            ]);
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
            $beritas->judul = $request->judul ;
            $beritas->tanggal = $request->tanggal ;
            $beritas->deskripsi_singkat = $request->deskripsi_singkat ;
            $beritas->deskripsi = $request->deskripsi ;
            $beritas->save();
            return redirect(route('berita.list'));
        }
    }

}

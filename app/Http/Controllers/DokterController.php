<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use App\Models\ListPoli;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = dokter::all();
        $polis = ListPoli::all();

        return view('dasboard/dokter.listdokter', compact('dokters', 'polis'));
    }

    public function add()
    {
        $polis = ListPoli::all();
        return view('dasboard/dokter.adddokter', compact('polis'));
    }

    public function savedokter(Request $request)
    { 
        // dd($request);
        $validated = $request->validate([
            'nama_dokter' => 'required',
            'poli' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required',
        ]);
        if ($validated){
            $file = $request->file('gambar');
            dokter::create([
                'nama_dokter' => $request->nama_dokter,
                'poli' => $request->poli,
                'keterangan' => $request->keterangan,
                'gambar' => $file->getClientOriginalName(),
            ]);
            $tujuan_upload = 'dokter';
            $file->move($tujuan_upload,$file->getClientOriginalName());
            return redirect(route('dokter.index'));
        }
    }

    public function edit($id)
    {
        $dokters = dokter::find($id);
        $polis = ListPoli::all();
        return view('dasboard/dokter.editdokter',compact('dokters', 'polis'));
    }

    public function update(Request $request,$id)
    {
        //  dd($request);
        $validated = $request->validate([
            'nama_dokter' => 'required',
            'poli' => 'required',
            'keterangan' => 'required',
        ]);
        if ($validated) {
            $dokters = dokter::find($id);
            if (is_null($request->file('gambar'))) {
                $dokters->nama_dokter = $request->nama_dokter;
                $dokters->poli = $request->poli;
                $dokters->keterangan = $request->keterangan;
                $dokters->save();
                return redirect(route('dokter.index'));
            }
            else{
                $file = $request->file('gambar');
                $dokters->nama_dokter = $request->nama_dokter;
                $dokters->poli = $request->poli;
                $dokters->keterangan = $request->keterangan;
                $dokters->gambar = $file->getClientOriginalName();
                $dokters->save();
                $tujuan_upload = 'dokter';
                $file->move($tujuan_upload,$file->getClientOriginalName());
                return redirect(route('dokter.index'));
            }
            
        }
    }

    public function delete($id)
    {
        $dokters = dokter::destroy($id);

        return redirect(route('dokter.index'));
    }

}

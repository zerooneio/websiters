<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListPoli;

class ListPoliController extends Controller
{
    public function index()
    {
        $polis = ListPoli::all();

        return view('dasboard.listpoli', compact('polis'));
    }

    public function add()
    {
        return view('dasboard.addpoli');
    }

    public function poli(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'poli' => 'required',
        ]);
        if ($validated){
            ListPoli::create([
                'nama' => $request->poli,
            ]);
            return redirect(route('listpoli.index'));
        }
    }

    public function edit($kd_poli)
    {
        $listpoli = ListPoli::find($kd_poli);

        return view('dasboard.editpoli',compact('listpoli'));
    }

    public function update(Request $request, $kd_poli)
    {
        //  dd($request);
        $validated = $request->validate([
            'poli' => 'required',
        ]);

        if ($validated) {
            $listpoli = ListPoli::find($kd_poli);

            $listpoli->nama = $request->poli;
            $listpoli->save();

            return redirect(route('listpoli.index'));
        }
    }

    public function delete($id)
    {
        $listpoli = ListPoli::destroy($id);

        return redirect(route('listpoli.index'));
    }
}

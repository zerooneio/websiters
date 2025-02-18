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
}

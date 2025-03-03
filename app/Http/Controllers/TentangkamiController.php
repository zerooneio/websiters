<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentangkami;

class TentangkamiController extends Controller
{
    public function index()
    {
        $about = tentangkami::all();
        return view('dasboard/tentangkami.tentangkami', compact('about'));
    }

    public function add()
    {
        $about = tentangkami::all();
        return view('dasboard/tentangkami.addtentangkami', compact('about'));
    }

    public function saveabout(Request $request)
    { 
        // dd($request);
        $validated = $request->validate([
            'gambar' => 'required',
            'linkyoutube' => 'required',
            'deskripsi' => 'required',
        ]);
        if ($validated){
            $file = $request->file('gambar');
            tentangkami::create([
                'gambar' => $file->getClientOriginalName(),
                'linkyoutube' => $request->linkyoutube,
                'deskripsi' => $request->deskripsi,
            ]);
            $tujuan_upload = 'about';
            $file->move($tujuan_upload,$file->getClientOriginalName());
            return redirect(route('about.edit'));
        }
    }

    public function edit()
    {
        $about = Tentangkami::all();
        return view('dasboard/tentangkami.edittentang', compact('about'));
    }
}

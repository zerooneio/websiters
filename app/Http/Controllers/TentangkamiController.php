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
        return view('dasboard/tentangkami.addtentangkami');
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
            return redirect(route('about.index'));
        }
    }

    public function edit($id)
    {
        $about = tentangkami::find($id);

        return view('dasboard/tentangkami.edittentang',compact('about'));
    }

    public function update(Request $request, $id)
    { 
        // dd($request);
        $validated = $request->validate([
            'linkyoutube' => 'required',
            'deskripsi' => 'required',
        ]);
        if ($validated){
            $about = tentangkami::find($id);
            if (is_null($request->file('gambar'))) {
                $about->linkyoutube = $request->linkyoutube ;
                $about->deskripsi = $request->deskripsi ;
                $about->save();
                return redirect(route('about.index'));
            }
            else{
                $file = $request->file('gambar');
                $about->linkyoutube = $request->linkyoutube ;
                $about->deskripsi = $request->deskripsi ;
                $about->gambar = $file->getClientOriginalName();
                $about->save();
                $tujuan_upload = 'about';
                $file->move($tujuan_upload,$file->getClientOriginalName());
                return redirect(route('about.index'));
            }
        }
    }
}

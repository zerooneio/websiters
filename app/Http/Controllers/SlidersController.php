<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sliders;

class SlidersController extends Controller
{
    public function index()
    {
        $sliders = sliders::all();

        return view('dasboard.sliders', compact('sliders'));
    }

    public function add(Request $request)
    {
        //  dd($request);
         $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
        ]);
        if ($validated){
            $file = $request->file('gambar');
            sliders::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'gambar' => $file->getClientOriginalName()
            ]);
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload,$file->getClientOriginalName());
            return redirect(route('sliders.index'));
            
            // menyimpan data file yang diupload ke variabel $file
		    // $file = $request->file('gambar');
 
        // nama file
            // echo 'File Name: '.$file->getClientOriginalName();
            // echo '<br>';

            //         // ekstensi file
            // echo 'File Extension: '.$file->getClientOriginalExtension();
            // echo '<br>';

            //         // real path
            // echo 'File Real Path: '.$file->getRealPath();
            // echo '<br>';

            //         // ukuran file
            // echo 'File Size: '.$file->getSize();
            // echo '<br>';

            //         // tipe mime
            // echo 'File Mime Type: '.$file->getMimeType();

            // // isi dengan nama folder tempat kemana file diupload
            // $tujuan_upload = 'data_file';
            // $file->move($tujuan_upload,$file->getClientOriginalName());
        }
    }

}

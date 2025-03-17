<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sliders;

class SlidersController extends Controller
{
    public function index()
    {
        $sliders = sliders::all();

        return view('dasboard/slide.listsliders', compact('sliders'));
    }

    public function add()
    {
        return view('dasboard/slide.sliders');
    }

    public function savepict(Request $request)
    {
        //  dd($request);
         $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required',
            'status_aktif' => 'required',
        ]);
        if ($validated){
            $file = $request->file('gambar');
            sliders::create([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'gambar' => $file->getClientOriginalName(),
                'status_aktif' => $request->status_aktif
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

    public function edit($kd_sliders)
    {
        $slider = sliders::find($kd_sliders);

        return view('dasboard/slide.editslider',compact('slider'));
    }

    public function update(Request $request,$kd_sliders)
    {
        //  dd($request);
        $validated = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',

            'status_aktif' => 'required',
        ]);
        if ($validated) {
            $slider = sliders::find($kd_sliders);
            if (is_null($request->file('gambar'))) {
                $slider->judul = $request->judul;
                $slider->deskripsi = $request->deskripsi;
                $slider->status_aktif = $request->status_aktif;
                $slider->save();
                return redirect(route('sliders.index'));
            }
            else{
                $file = $request->file('gambar');
                $slider->judul = $request->judul;
                $slider->deskripsi = $request->deskripsi;
                $slider->gambar = $file->getClientOriginalName();
                $slider->status_aktif = $request->status_aktif;
                $slider->save();
                $tujuan_upload = 'data_file';
                $file->move($tujuan_upload,$file->getClientOriginalName());
                return redirect(route('sliders.index'));
            }
            
        }
    }

    public function delete($id)
    {
        $slider = sliders::destroy($id);

        return redirect(route('sliders.index'));
    }

}

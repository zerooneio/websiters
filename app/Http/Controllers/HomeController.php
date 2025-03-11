<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListPoli;
use App\Models\Sliders;
use App\Models\Berita;
use App\Models\Tentangkami;
use App\Models\Dokter;
use App\Models\Jadwaldokter;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $polis = ListPoli::all();
        $sliders = sliders::all();
        $about = tentangkami::all();
        $beritas = berita::orderBy('tanggal', 'desc')->limit(5)->get();
        $dokters = dokter::limit(4)->get();
        $jadwals =  jadwaldokter::where('hari', '=', now()->isoFormat('dddd'))->get();
        $hariini = Carbon::now()->isoFormat('dddd, D MMM Y');
        return view('page.index', compact('polis', 'sliders', 'beritas', 'about', 'dokters', 'jadwals', 'hariini'));
    }

    public function sendwa(Request $request)
    {
        // dd($request);
        $validated = $request->validate([
            'name' => 'required',
            'norm' => 'required',
            'phone' => 'required',
            'tgl' => 'required',
            'poli' => 'required',
        ]);
        if ($validated){
            $isipesan = "Saya mau periksa dengan rincian sebagai berikut:%0A Nama = $request->name%0A Nomor Rekam Medis = $request->norm%0A No. Telp = $request->phone%0A Tanggal Periksa = $request->tgl%0A Poli = $request->poli ";
            $apiwa = "https://api.whatsapp.com/send/?phone=6282245652379&text=$isipesan";
            return Redirect::to($apiwa);
        }
    }
}

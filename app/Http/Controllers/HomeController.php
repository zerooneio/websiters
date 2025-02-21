<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListPoli;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $polis = ListPoli::all();

        return view('page.index', compact('polis'));
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

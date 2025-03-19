<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwaldokter;
use App\Models\ListPoli;
use App\Models\Dokter;

class JadwaldokterController extends Controller
{
    public function index()
    {
        $jadwals = jadwaldokter::all();
        $polis = ListPoli::all();
        $dokters = dokter::all();

        return view('dasboard/jadwal.jadwaldokter', compact('jadwals', 'polis', 'dokters'));
    }

    public function savejadwal(Request $request)
    {
        $validated = $request->validate([
            'hari' => 'required',
            'poli' => 'required',
            'dokter' => 'required',
            'jam' => 'required',
        ]);
        if ($validated){
            jadwaldokter::create([
                'hari' => $request->hari,
                'poli' => $request->poli,
                'dokter' => $request->dokter,
                'jam' => $request->jam,
            ]);
            return redirect(route('jadwal.index'));
        }
    }

    public function edit($id)
    {
        $jadwals = jadwaldokter::find($id);
        $polis = ListPoli::all();
        $dokters = dokter::all();
        return view('dasboard/jadwal.editjadwal',compact('jadwals', 'polis', 'dokters'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'hari' => 'required',
            'poli' => 'required',
            'dokter' => 'required',
            'jam' => 'required',
        ]);
        if ($validated) {
            $jadwals = jadwaldokter::find($id);

            $jadwals->hari = $request->hari;
            $jadwals->poli = $request->poli;
            $jadwals->dokter = $request->dokter;
            $jadwals->jam = $request->jam;
            $jadwals->save();

            return redirect(route('jadwal.index'));
        }
    }

    public function delete($id)
    {
        $listpoli = jadwaldokter::destroy($id);

        return redirect(route('jadwal.index'));
    }

}

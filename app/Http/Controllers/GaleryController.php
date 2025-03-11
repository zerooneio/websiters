<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galery;

class GaleryController extends Controller
{
    public function index()
    {
        $galerys = galery::all();

        return view('dasboard/galery.listgalery', compact('galerys'));
    }
}

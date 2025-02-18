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
}

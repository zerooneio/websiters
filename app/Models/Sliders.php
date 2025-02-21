<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $fillable = ['kd_sliders','judul', 'deskripsi', 'gambar'];

    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $fillable = ['kd_sliders','judul', 'deskripsi', 'gambar', 'status_aktif'];
    protected $primaryKey = 'kd_sliders';

    public $timestamps = false;
}

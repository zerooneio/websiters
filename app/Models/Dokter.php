<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $fillable = ['nama_dokter','poli','keterangan','gambar'];
    protected $table = 'dokter';

    public $timestamps = false;
}

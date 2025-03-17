<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwaldokter extends Model
{
    protected $fillable = ['hari','poli','dokter','jam'];
    protected $table = 'jadwaldokter';

    public $timestamps = false;
}

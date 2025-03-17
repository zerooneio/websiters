<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tentangkami extends Model
{
    protected $fillable = ['gambar','linkyoutube','deskripsi'];
    protected $table = 'tentangkami';

    public $timestamps = false;
}

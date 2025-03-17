<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $fillable = ['kategory','gambar'];
    protected $table = 'galery';

    public $timestamps = false;
}

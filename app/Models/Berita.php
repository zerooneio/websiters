<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = ['judul','tanggal','deskripsi_singkat','deskripsi'];
    protected $table = 'berita';

    public $timestamps = false;
}

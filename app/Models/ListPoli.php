<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListPoli extends Model
{
    protected $fillable = ['kd_poli','nama'];

    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembimbing extends Model
{
    //
    protected $table = 'Pembimbing';

    public function daftar()
    {
        return $this->belongsTo('App\Daftar');
    }
}

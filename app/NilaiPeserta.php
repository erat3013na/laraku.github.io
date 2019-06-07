<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiPeserta extends Model
{
    //
    protected $table = 'NilaiPeserta';

    public function daftar()
    {
        return $this->belongsTo('App\Daftar');
    }
}

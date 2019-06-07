<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Daftar extends Model
{
    use SoftDeletes;
    protected $table = 'daftar';

    public function nilaipeserta()
    {
        return $this->hasOne('App\NilaiPeserta');
    }

    public function pembimbing()
    {
        return $this->hasMany('App\Pembimbing', 'daftar_kelas', 'kelas1');
    }
}

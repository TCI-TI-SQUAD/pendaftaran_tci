<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipeSekolah extends Model
{
    protected $fillable = [
        'nama_tipe'
    ];

    public function Sekolah(){
        return $this->hasMany('App\Sekolah','id_tipe_sekolah','id');
    }
}

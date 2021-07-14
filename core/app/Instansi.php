<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instansi extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'nama_instansi',
        'keterangan',
        'logo_instansi',
        'tipe_instansi'
    ];

    // HAS MANY FAKULTAS
    public function Fakultas(){
        return $this->hasMany('App\Fakultas','id_instansi','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id_pendaftaran',
        'hsk',
        'nama_kelas',
        'tanggal_mulai',
        'tanggal_selesai',
        'isBerbayar',
        'harga',
        'kuota',
        'status',
        'logo_kelas'
    ];

    public function DetailKelas(){
        return $this->hasMany('App\DetailKelas','id_kelas','id');
    }
}

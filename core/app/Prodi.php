<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $fillable = [
        'id_fakultas',
        'nama_prodi',
        'keterangan',
    ];
}

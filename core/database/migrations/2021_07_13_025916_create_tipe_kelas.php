<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipeKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipe_kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tipe',50)->unique();
            $table->string('keterangan_tipe',100);
            $table->enum('warna_tipe',['primary','success','warning','danger','secondary'])->default('primary');
            $table->timestamps();
            $table->softDeletes('deleted_at',0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipe_kelas');
    }
}

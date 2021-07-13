<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pendaftaran');
            $table->string('nama_kelas',50)->unique();
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->integer('harga')->default(0);
            $table->integer('kuota')->default(0);
            $table->enum('status',['buka','tutup']);
            $table->string('logo_kelas',100)->default('default.jpg');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_instansi');
            $table->enum('status',['umum','siswa','mahasiswa','instansi']);
            $table->string('name',100);
            $table->string('nomor_pelajar_tci',100)->unique();
            $table->string('username',100)->unique();
            $table->string('password',200);
            $table->string('email',50)->unique();
            $table->string('phone_number',15)->unique();
            $table->string('line',50)->unique();
            $table->string('wa',15)->unique();
            $table->string('user_profile_pict',200)->nullable()->default('default.jpg');
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('hak_akses',['aktif','ban'])->default('aktif');
            $table->enum('favorite',['tidak','iya'])->default('tidak');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Fakultas;

class CreateFakultas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_instansi');
            $table->string('nama_fakultas',50);
            $table->string('keterangan',100);
            $table->timestamps();
            $table->softDeletes('deleted_at',0);
        });

        Fakultas::insert([
            [
                'id_instansi' => 2,
                'nama_fakultas' => 'Fakultas Teknik',
                'keterangan' => 'Fakultas Tenkin Universitas Udayana'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fakultas');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Instansi;

class CreateInstansis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instansis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_instansi',100)->unique();
            $table->string('keterangan',200);
            $table->string('logo_instansi',200)->default('default.jpg');
            $table->enum('tipe_instansi',['universitas','instansi_non_universitas']);
            $table->timestamps();
            $table->softDeletes('deleted_at',0);
        });

        Instansi::insert([
            [
            'nama_instansi' => 'Umum',
            'keterangan' => 'Umum tidak berasal dari instansi kerja sama TCI',
            'logo_instansi' => 'default.jpg',
            'tipe_instansi' => 'instansi_non_universitas',
            ],
            [
            'nama_instansi' => 'Universitas Udayana',
            'keterangan' => 'Universitas Udayana Bali',
            'logo_instansi' => 'default.jpg',
            'tipe_instansi' => 'universitas',
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
        Schema::dropIfExists('instansis');
    }
}

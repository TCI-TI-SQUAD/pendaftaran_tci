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
            $table->foreignId('id_universitas');
            $table->string('nama_fakultas',50);
            $table->string('keterangan',100);
            $table->timestamps();
            $table->softDeletes('deleted_at',0);
        });

        Fakultas::insert([
            [
                'id_universitas' => 1,
                'nama_fakultas' => 'Fakultas Teknik',
                'keterangan' => 'Fakultas Teknik Universitas Udayana'
            ],
            [
                'id_universitas' => 1,
                'nama_fakultas' => 'Fakultas Ekonomi dan Bisnis',
                'keterangan' => 'Fakultas Ekonomi dan Bisnis Universitas Udayana'
            ],
            [
                'id_universitas' => 1,
                'nama_fakultas' => 'Fakultas Ilmu Budaya',
                'keterangan' => 'Fakultas Ilmu Budaya Universitas Udayana'
            ],
            [
                'id_universitas' => 1,
                'nama_fakultas' => 'Fakultas MIPA',
                'keterangan' => 'Fakultas MIPA Universitas Udayana'
            ],
            [
                'id_universitas' => 1,
                'nama_fakultas' => 'Fakultas Kedokteran',
                'keterangan' => 'Fakultas Kedokteran Universitas Udayana'
            ],
            [
                'id_universitas' => 1,
                'nama_fakultas' => 'Fakultas Kedokteran Hewan',
                'keterangan' => 'Fakultas Kedokteran Hewan Universitas Udayana'
            ],
            [
                'id_universitas' => 1,
                'nama_fakultas' => 'Fakultas Pertanian',
                'keterangan' => 'Fakultas Pertanian Universitas Udayana'
            ],
            [
                'id_universitas' => 1,
                'nama_fakultas' => 'Fakultas Teknologi Pertanian',
                'keterangan' => 'Fakultas Teknologi Pertanian Universitas Udayana'
            ],
            [
                'id_universitas' => 1,
                'nama_fakultas' => 'Fakultas Hukum',
                'keterangan' => 'Fakultas Hukum Universitas Udayana'
            ],
            [
                'id_universitas' => 1,
                'nama_fakultas' => 'Fakultas FISIP',
                'keterangan' => 'Fakultas FISIP Universitas Udayana'
            ],
            [
                'id_universitas' => 1,
                'nama_fakultas' => 'Fakultas Kelautan dan Perikanan',
                'keterangan' => 'Fakultas Kelautan dan Perikanan Universitas Udayana'
            ],
            [
                'id_universitas' => 1,
                'nama_fakultas' => 'Fakultas Pariwisata',
                'keterangan' => 'Fakultas Pariwisata Universitas Udayana'
            ],
            [
                'id_universitas' => 2,
                'nama_fakultas' => 'Fakultas Teknik Undiksa',
                'keterangan' => 'Fakultas Tenkin Universitas Pendidikan Ganesha'
            ],
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

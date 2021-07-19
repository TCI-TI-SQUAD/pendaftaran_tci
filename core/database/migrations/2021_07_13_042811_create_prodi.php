<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Prodi;

class CreateProdi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_fakultas');
            $table->string('nama_prodi',50);
            $table->string('keterangan',100);
            $table->timestamps();
            $table->softDeletes('deleted_at',0);
        });

        Prodi::insert([
            // teknik
            [
                'id_fakultas' => 1,
                'nama_prodi' => 'Teknologi Informasi',
                'keterangan' => 'Program Studi Teknologi Informasi Fakultas Teknik Universitas Udayana'
            ],
            [
                'id_fakultas' => 1,
                'nama_prodi' => 'Teknik Sipil',
                'keterangan' => 'Program Studi Teknik Sipil Fakultas Teknik Universitas Udayana'
            ],
            [
                'id_fakultas' => 1,
                'nama_prodi' => 'Teknik Arsitektur',
                'keterangan' => 'Program Studi Teknik Arsitektur Fakultas Teknik Universitas Udayana'
            ],
            [
                'id_fakultas' => 1,
                'nama_prodi' => 'Teknik Elektro',
                'keterangan' => 'Program Studi Teknik Elektro Fakultas Teknik Universitas Udayana'
            ],
            [
                'id_fakultas' => 1,
                'nama_prodi' => 'Teknik Mesin',
                'keterangan' => 'Program Studi Teknik Mesin Fakultas Teknik Universitas Udayana'
            ],
            [
                'id_fakultas' => 1,
                'nama_prodi' => 'Teknik Lingkungan',
                'keterangan' => 'Program Studi Teknik Lingkungan Fakultas Teknik Universitas Udayana'
            ],
            // ekonomi
            [
                'id_fakultas' => 2,
                'nama_prodi' => 'Akuntansi',
                'keterangan' => 'Program Studi Akuntansi Fakultas Ekonomi dan Bisnis Universitas Udayana'
            ],
            [
                'id_fakultas' => 2,
                'nama_prodi' => 'Manajemen',
                'keterangan' => 'Program Studi Manajemen Fakultas Ekonomi dan Bisnis Universitas Udayana'
            ],
            [
                'id_fakultas' => 2,
                'nama_prodi' => 'Profesi Akuntan',
                'keterangan' => 'Program Studi Profesi Akuntan Fakultas Ekonomi dan Bisnis Universitas Udayana'
            ],
            // llmu budaya
            [
                'id_fakultas' => 3,
                'nama_prodi' => 'Antropologi Budaya',
                'keterangan' => 'Program Studi Antropologi Budaya Fakultas Ilmu Budaya Universitas Udayana'
            ],
            [
                'id_fakultas' => 3,
                'nama_prodi' => 'Arkeologi',
                'keterangan' => 'Program Studi Arkeologi Fakultas Ilmu Budaya Universitas Udayana'
            ],
            [
                'id_fakultas' => 3,
                'nama_prodi' => 'Ilmu Sejarah',
                'keterangan' => 'Program Studi Ilmu Sejarah Fakultas Ilmu Budaya Universitas Udayana'
            ],
            [
                'id_fakultas' => 3,
                'nama_prodi' => 'Sastra Bali',
                'keterangan' => 'Program Studi Sastra Bali Fakultas Ilmu Budaya Universitas Udayana'
            ],
            [
                'id_fakultas' => 3,
                'nama_prodi' => 'Sastra Indonesia',
                'keterangan' => 'Program Studi Sastra Indonesia Fakultas Ilmu Budaya Universitas Udayana'
            ],
            [
                'id_fakultas' => 3,
                'nama_prodi' => 'Sastra Inggris',
                'keterangan' => 'Program Studi Sastra Inggris Fakultas Ilmu Budaya Universitas Udayana'
            ],
            [
                'id_fakultas' => 3,
                'nama_prodi' => 'Sastra Jawa Kuno',
                'keterangan' => 'Program Studi Sastra Jawa Kuno Fakultas Ilmu Budaya Universitas Udayana'
            ],
            [
                'id_fakultas' => 3,
                'nama_prodi' => 'Sastra Jepang',
                'keterangan' => 'Program Studi Sastra Jepang Fakultas Ilmu Budaya Universitas Udayana'
            ],
            // MIPA
            [
                'id_fakultas' => 4,
                'nama_prodi' => 'Biologi',
                'keterangan' => 'Program Studi Biologi Fakultas MIPA Universitas Udayana'
            ],
            [
                'id_fakultas' => 4,
                'nama_prodi' => 'Farmasi',
                'keterangan' => 'Program Studi Farmasi Fakultas MIPA Universitas Udayana'
            ],
            [
                'id_fakultas' => 4,
                'nama_prodi' => 'Fisika',
                'keterangan' => 'Program Studi Fisika Fakultas MIPA Universitas Udayana'
            ],
            [
                'id_fakultas' => 4,
                'nama_prodi' => 'Ilmu Komputer/Teknik Informatika',
                'keterangan' => 'Program Studi Ilmu Komputer/Teknik Informatika Fakultas MIPA Universitas Udayana'
            ],
            [
                'id_fakultas' => 4,
                'nama_prodi' => 'Kimia',
                'keterangan' => 'Program Studi Kimia Fakultas MIPA Universitas Udayana'
            ],
            [
                'id_fakultas' => 4,
                'nama_prodi' => 'Matematika',
                'keterangan' => 'Program Studi Matematika Fakultas MIPA Universitas Udayana'
            ],
            [
                'id_fakultas' => 4,
                'nama_prodi' => 'Profesi Apoteker',
                'keterangan' => 'Program Studi Profesi Apoteker Fakultas MIPA Universitas Udayana'
            ],
            // kedokteran
            [
                'id_fakultas' => 5,
                'nama_prodi' => 'Fisioterapi',
                'keterangan' => 'Program Studi Fisioterapi Fakultas Kedokteran Universitas Udayana'
            ],
            [
                'id_fakultas' => 5,
                'nama_prodi' => 'Ilmu Keperawatan',
                'keterangan' => 'Program Studi Ilmu Keperawatan Fakultas Kedokteran Universitas Udayana'
            ],
            [
                'id_fakultas' => 5,
                'nama_prodi' => 'Ilmu Kesehatan Masyarakat',
                'keterangan' => 'Program Studi Ilmu Kesehatan Masyarakat Fakultas Kedokteran Universitas Udayana'
            ],
            [
                'id_fakultas' => 5,
                'nama_prodi' => 'Kedokteran Gigi',
                'keterangan' => 'Program Studi Kedokteran Gigi Fakultas Kedokteran Universitas Udayana'
            ],
            [
                'id_fakultas' => 5,
                'nama_prodi' => 'Psikologi',
                'keterangan' => 'Program Studi Psikologi Fakultas Kedokteran Universitas Udayana'
            ],
            [
                'id_fakultas' => 5,
                'nama_prodi' => 'Sp1 Ilmu Anestesi dan Terapi Intensif',
                'keterangan' => 'Program Studi Sp1 Ilmu Anestesi dan Terapi Intensif Fakultas Kedokteran Universitas Udayana'
            ],
            [
                'id_fakultas' => 5,
                'nama_prodi' => 'Sp1 Ilmu Bedah',
                'keterangan' => 'Program Studi Sp1 Ilmu Bedah Fakultas Kedokteran Universitas Udayana'
            ],
            [
                'id_fakultas' => 5,
                'nama_prodi' => 'Sp1 Ilmu Kandungan',
                'keterangan' => 'Program Studi Sp1 Ilmu Kandungan Fakultas Kedokteran Universitas Udayana'
            ],
            [
                'id_fakultas' => 5,
                'nama_prodi' => 'Ilmu Orthopaedi dan Traumatologi',
                'keterangan' => 'Program Studi Ilmu Orthopaedi dan Traumatologi Fakultas Kedokteran Universitas Udayana'
            ],
            [
                'id_fakultas' => 5,
                'nama_prodi' => 'Kardiologi',
                'keterangan' => 'Program Studi Kardiologi Fakultas Kedokteran Universitas Udayana'
            ],
            // kedokteran hewan
            [
                'id_fakultas' => 6,
                'nama_prodi' => 'Kedokteran Hewan',
                'keterangan' => 'Program Studi Kedokteran Hewan Fakultas Kedokteran Hewan Universitas Udayana'
            ],
            // Pertanian
            [
                'id_fakultas' => 7,
                'nama_prodi' => 'Agribisnis',
                'keterangan' => 'Program Studi Agribisnis Fakultas Pertanian Universitas Udayana'
            ],
            [
                'id_fakultas' => 7,
                'nama_prodi' => 'Agroteknologi',
                'keterangan' => 'Program Studi Agroteknologi Fakultas Pertanian Universitas Udayana'
            ],
            [
                'id_fakultas' => 7,
                'nama_prodi' => 'Arsitektur Pertamanan',
                'keterangan' => 'Program Studi Arsitektur Pertamanan Fakultas Pertanian Universitas Udayana'
            ],
            // teknologi pertanian
            [
                'id_fakultas' => 8,
                'nama_prodi' => 'Ilmu dan Teknologi Pangan',
                'keterangan' => 'Program Studi Ilmu dan Teknologi Pangan Fakultas Teknologi Pertanian Universitas Udayana'
            ],
            [
                'id_fakultas' => 8,
                'nama_prodi' => 'Teknik Pertanian',
                'keterangan' => 'Program Studi Teknik Pertanian Fakultas Teknologi Pertanian Universitas Udayana'
            ],
            [
                'id_fakultas' => 8,
                'nama_prodi' => 'Teknologi Industri Pertanian',
                'keterangan' => 'Program Studi Teknologi Industri Pertanian Fakultas Teknologi Pertanian Universitas Udayana'
            ],
            // hukum
            [
                'id_fakultas' => 9,
                'nama_prodi' => 'Ilmu Hukum',
                'keterangan' => 'Program Studi Ilmu Hukum Fakultas Hukum Universitas Udayana'
            ],
            // fisip
            [
                'id_fakultas' => 10,
                'nama_prodi' => 'Administrasi Negara',
                'keterangan' => 'Program Studi Administrasi Negara Fakultas FISIP Universitas Udayana'
            ],
            [
                'id_fakultas' => 10,
                'nama_prodi' => 'D3 Perpustakaan',
                'keterangan' => 'Program Studi D3 Perpustakaan Fakultas FISIP Universitas Udayana'
            ],
            [
                'id_fakultas' => 10,
                'nama_prodi' => 'Hubungan Internasional',
                'keterangan' => 'Program Studi Hubungan Internasional Fakultas FISIP Universitas Udayana'
            ],
            [
                'id_fakultas' => 10,
                'nama_prodi' => 'Ilmu Komunikasi',
                'keterangan' => 'Program Studi Ilmu Komunikasi Fakultas FISIP Universitas Udayana'
            ],
            [
                'id_fakultas' => 10,
                'nama_prodi' => 'Ilmu Politik',
                'keterangan' => 'Program Studi Ilmu Politik Fakultas FISIP Universitas Udayana'
            ],
            [
                'id_fakultas' => 10,
                'nama_prodi' => 'Ilmu Sosiologi',
                'keterangan' => 'Program Studi Ilmu Sosiologi Fakultas FISIP Universitas Udayana'
            ],
            
            // kelautan dan perikanan TDK ADA DATA DI WEB UNUD
            [
                'id_fakultas' => 11,
                'nama_prodi' => '',
                'keterangan' => 'Program Studi ... Fakultas Kelautan dan Perikanan Universitas Udayana'
            ],
            // pariwisata TDK ADA DATA DI WEB UNUD
            [
                'id_fakultas' => 12,
                'nama_prodi' => '',
                'keterangan' => 'Program Studi ... Fakultas Pariwisata Universitas Udayana'
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
        Schema::dropIfExists('prodis');
    }
}

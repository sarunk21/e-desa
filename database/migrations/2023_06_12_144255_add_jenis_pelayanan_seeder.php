<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $jenisLayanan = [
            [
                'id' => 1,
                'nama_pelayanan' => 'Pembuatan KTP',
                'tipe_layanan' => 1
            ],
            [
                'id' => 2,
                'nama_pelayanan' => 'Pembuatan Kartu Keluarga',
                'tipe_layanan' => 1
            ],
            [
                'id' => 3,
                'nama_pelayanan' => 'Surat Keterangan',
                'tipe_layanan' => 2
            ],
            [
                'id' => 4,
                'nama_pelayanan' => 'Surat Keterangan Belum Menikah, Duda/Janda',
                'tipe_layanan' => 2
            ],
            [
                'id' => 5,
                'nama_pelayanan' => 'Surat Keterangan Usaha',
                'tipe_layanan' => 2
            ],
            [
                'id' => 6,
                'nama_pelayanan' => 'Lain - Lain',
                'tipe_layanan' => null
            ]
        ];

        DB::table('jenis_pelayanan')->insert($jenisLayanan);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('jenis_pelayanan')->truncate();
    }
};

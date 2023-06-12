<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('jenis_pelayanan', function (Blueprint $table) {
            $table->integer('tipe_layanan')->nullable()->after('nama_pelayanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jenis_pelayanan', function (Blueprint $table) {
            $table->dropColumn('tipe_layanan');
        });
    }
};

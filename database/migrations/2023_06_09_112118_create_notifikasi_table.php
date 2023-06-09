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
        Schema::create('notifikasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->integer('status_notifikasi')->default(1); // 1 = belum dibaca, 2 = sudah dibaca
            $table->string('judul_notifikasi');
            $table->text('isi_notifikasi');
            $table->string('link_notifikasi')->nullable();
            $table->integer('tipe_notifikasi')->nullable(); // 1 = antrian, 2 = pengajuan, 3 = pengaduan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifikasi');
    }
};

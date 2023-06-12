<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisPelayanan extends Model
{
    protected $table = 'jenis_pelayanan';

    protected $fillable = [
        'nama_pelayanan', 'tipe_layanan'
    ];

    const TipeLayananAntrian = 1;
    const TipeLayananPengajuan = 2;

    public function suratPengantar()
    {
        return $this->hasMany(SuratPengantar::class);
    }

    public function notifikasi()
    {
        return $this->hasMany(Notifikasi::class);
    }

    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class);
    }
}

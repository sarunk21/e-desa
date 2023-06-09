<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratPengantar extends Model
{
    protected $table = 'surat_pengantar';

    protected $fillable = [
        'user_id',
        'jenis_pelayanan_id',
        'jenis_berkas',
        'file_berkas',
        'orginal_name_berkas',
        'status_pengajuan'
    ];

    const STATUS_WAITING = 1;
    const STATUS_APPROVED = 2;
    const STATUS_REJECTED = 3;
    const STATUS_DONE = 4;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jenisPelayanan()
    {
        return $this->belongsTo(JenisPelayanan::class);
    }

    public function getStatusAttribute()
    {
        $status = '';

        switch ($this->status_pengajuan) {
            case self::STATUS_WAITING:
                $status = 'Menunggu Verifikasi';
                break;
            case self::STATUS_APPROVED:
                $status = 'Verifikasi Berhasil';
                break;
            case self::STATUS_REJECTED:
                $status = 'Verifikasi Gagal';
                break;
            case self::STATUS_DONE:
                $status = 'Selesai';
                break;
        }

        return $status;
    }
}

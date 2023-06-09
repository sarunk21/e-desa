<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratPengantar extends Model
{
    protected $table = 'surat_pengantar';

    protected $fillable = [
        'user_id',
        'jenis_pelayanan_id',
        'status',
        'keterangan'
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
}

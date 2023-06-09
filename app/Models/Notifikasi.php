<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    protected $table = 'notifikasi';

    protected $fillable = [
        'user_id',
        'jenis_pelayanan_id',
        'isi_notifikasi',
        'status'
    ];

    const STATUS_UNREAD = 1;
    const STATUS_READ = 2;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jenisPelayanan()
    {
        return $this->belongsTo(JenisPelayanan::class);
    }
}

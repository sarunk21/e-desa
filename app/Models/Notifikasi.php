<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    protected $table = 'notifikasi';

    protected $fillable = [
        'user_id',
        'status_notifikasi',
        'judul_notifikasi',
        'isi_notifikasi',
        'link_notifikasi',
        'tipe_notifikasi'
    ];

    const STATUS_UNREAD = 1;
    const STATUS_READ = 2;

    const TYPE_ANTRIAN = 1;
    const TYPE_PENGAJUAN = 2;
    const TYPE_PENGADUAN = 3;

    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function jenisPelayanan()
    {
        return $this->belongsTo(JenisPelayanan::class);
    }

    public function getNotifikasiLinkAttribute()
    {
        if ($this->tipe_notifikasi == self::TYPE_ANTRIAN) return route('antrian.detail', ['id' => $this->link_notifikasi, 'is_read' => 2]);
        if ($this->tipe_notifikasi == self::TYPE_PENGAJUAN) return route('pengajuan.detail', ['id' => $this->link_notifikasi, 'is_read' => 2]);
        if ($this->tipe_notifikasi == self::TYPE_PENGADUAN) return route('pengaduan.detail', ['id' => $this->link_notifikasi, 'is_read' => 2]);
    }
}

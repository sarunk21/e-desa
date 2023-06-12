<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    protected $table = 'antrian';

    protected $fillable = [
        'user_id',
        'jenis_pelayanan_id',
        'no_antrian',
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function jenisPelayanan()
    {
        return $this->belongsTo(JenisPelayanan::class);
    }
}

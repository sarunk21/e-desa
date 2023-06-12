<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nik', 'name', 'tanggal_lahir', 'jenis_kelamin',
        'alamat', 'email', 'phone_number', 'password', 'user_type'
    ];

    // Const User Type
    const USER_TYPE_ADMIN = 1;
    const USER_TYPE_USER = 2;
}

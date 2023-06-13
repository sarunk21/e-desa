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
        $users = [
            [
                'nik' => '1111111111111111',
                'name' => 'Admin',
                'tanggal_lahir' => '2000-01-01',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Admin',
                'email' => 'admin@mail.com',
                'phone_number' => '081234567890',
                'password' => bcrypt('admin'),
                'user_type' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nik' => '0987654321123456',
                'name' => 'Warga 1',
                'tanggal_lahir' => '2000-01-01',
                'jenis_kelamin' => 'L',
                'alamat' => 'Jl. Warga 1',
                'email' => 'warga1@mail.com',
                'phone_number' => '081234567891',
                'password' => bcrypt('01012000'),
                'user_type' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('users')->insert($users);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('users')->where('user_type', 1)->delete();
        DB::table('users')->where('user_type', 2)->delete();
    }
};

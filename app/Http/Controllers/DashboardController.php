<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboardUser()
    {
        return view('users.dashboard');
    }

    public function dashboardAdmin()
    {
        // Get waktu sekarang
        $waktu = \Carbon\Carbon::now()->format('H:i');

        // Jika waktu salam sekarang lebih dari 00:00 dan kurang dari 10:00
        if ($waktu > '00:00' && $waktu < '10:00') {
            $salam = 'Selamat Pagi';
        } elseif ($waktu >= '10:00' && $waktu < '15:00') {
            $salam = 'Selamat Siang';
        } elseif ($waktu >= '15:00' && $waktu < '18:00') {
            $salam = 'Selamat Sore';
        } else {
            $salam = 'Selamat Malam';
        }

        return view('admin.dashboard', compact('salam'));
    }
}

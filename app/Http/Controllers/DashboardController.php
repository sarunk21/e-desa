<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Antrian;
use App\Models\Notifikasi;
use App\Models\Pengaduan;
use App\Models\SuratPengantar;

class DashboardController extends Controller
{
    public function dashboardUser()
    {
        $jumlah_notifikasi = Notifikasi::where('user_id', auth()->user()->id)->where('status_notifikasi', Notifikasi::STATUS_UNREAD)->count() ?? 0;

        return view('users.dashboard', compact('jumlah_notifikasi'));
    }

    public  static function notifkasi()
    {
        $notifikasi = Notifikasi::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        $jumlah_notifikasi = Notifikasi::where('user_id', auth()->user()->id)->where('status_notifikasi', Notifikasi::STATUS_UNREAD)->count() ?? 0;

        return view('users.notifikasi', compact('notifikasi', 'jumlah_notifikasi'));
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

        // Data Dasboard
        $jumlah_antrian = Antrian::where('created_at', 'like', date('Y-m-d') . '%')->count() ?? 0;
        $jumlah_pengajuan = SuratPengantar::where('status_pengajuan', SuratPengantar::STATUS_WAITING)->count() ?? 0;
        $jumlah_pengaduan = Pengaduan::all()->count() ?? 0;

        return view('admin.dashboard', compact('salam', 'jumlah_antrian', 'jumlah_pengajuan', 'jumlah_pengaduan'));
    }
}

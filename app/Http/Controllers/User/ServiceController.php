<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    // Antrian
    public function antrian()
    {
        return view('users.service.antrian.antrian');
    }

    public function antrianDetail($id)
    {
        return view('users.service.antrian.antrian');
    }

    public function antrianStore()
    {
        return redirect()->route('antrian.detail', 1);
    }

    // Pengajuan
    public function pengajuan()
    {
        return view('users.service.pengajuan.pengajuan');
    }

    public function pengajuanDetail($id)
    {
        return view('users.service.pengajuan.pengajuan-detail');
    }

    public function pengajuanStore()
    {
        return redirect()->route('pengajuan.detail', 1);
    }
}

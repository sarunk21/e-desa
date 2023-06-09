<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Antrian;
use App\Models\JenisPelayanan;

use App\Http\Requests\User\Antrian\StoreAntrianRequest;

class ServiceController extends Controller
{
    // Antrian
    public function antrian()
    {
        $pelayanan = JenisPelayanan::all();
        $jumlah_antrian = Antrian::where('created_at', date('Y-m-d'))->count();

        return view('users.service.antrian.antrian', compact('pelayanan', 'jumlah_antrian'));
    }

    public function antrianDetail($id)
    {
        $antrian = Antrian::findOrFail($id);

        // Cek jika antrian milik user
        if ($antrian->user_id != auth()->user()->id) {
            return redirect()->route('dashboard.user');
        }

        return view('users.service.antrian.antrian-detail', compact('antrian'));
    }

    public function antrianStore(StoreAntrianRequest $request)
    {
        $data = $request->validated();

        // Cek apakah sudah penuh
        $jumlah_antrian = Antrian::where('created_at', date('Y-m-d'))->count();
        $data['no_antrian'] = $jumlah_antrian + 1;

        if ($jumlah_antrian >= 20) {
            return redirect()->back()->with('error', 'Antrian semua pelayanan sudah penuh, silahkan coba lagi besok');
        }

        $antrian = Antrian::create($data);

        return redirect()->route('antrian.detail', $antrian->id);
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

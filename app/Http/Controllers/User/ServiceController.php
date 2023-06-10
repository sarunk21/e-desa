<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Antrian;
use App\Models\Notifikasi;
use App\Models\SuratPengantar;
use App\Models\JenisPelayanan;

use App\Http\Requests\User\Antrian\StoreAntrianRequest;
use App\Http\Requests\User\Pengajuan\StorePengajuanRequest;

class ServiceController extends Controller
{
    // Antrian
    public function antrian()
    {
        $pelayanan = JenisPelayanan::all();
        $jumlah_antrian = Antrian::where('created_at', 'like', date('Y-m-d') . '%')->count() + 1;

        return view('users.service.antrian.antrian', compact('pelayanan', 'jumlah_antrian'));
    }

    public function antrianDetail($id)
    {
        $antrian = Antrian::findOrFail($id);

        // Cek jika antrian milik user
        if ($antrian->user_id != auth()->user()->id) {
            return redirect()->route('dashboard.user');
        }

        // Update status notifikasi
        if (request('is_read') == 2) {
            Notifikasi::where('link_notifikasi', $id)->update(['status_notifikasi' => Notifikasi::STATUS_READ]);
        }

        return view('users.service.antrian.antrian-detail', compact('antrian'));
    }

    public function antrianStore(StoreAntrianRequest $request)
    {
        $data = $request->validated();

        // Cek apakah sudah penuh
        $jumlah_antrian = Antrian::where('created_at', 'like', date('Y-m-d') . '%')->count();
        $data['no_antrian'] = $jumlah_antrian + 1;

        if ($jumlah_antrian >= 20) {
            return redirect()->back()->with('error', 'Antrian semua pelayanan sudah penuh, silahkan coba lagi besok');
        }

        $antrian = Antrian::create($data);
        Notifikasi::create([
            'user_id' => $data['user_id'],
            'status_notifikasi' => Notifikasi::STATUS_UNREAD,
            'judul_notifikasi' => 'Antrian berhasil dibuat',
            'isi_notifikasi' => 'Antrian anda berhasil dibuat, silahkan menunggu panggilan selanjutnya',
            'link_notifikasi' => $antrian->id,
            'tipe_notifikasi' => Notifikasi::TYPE_ANTRIAN
        ]);

        return redirect()->route('antrian.detail', $antrian->id);
    }

    // Pengajuan
    public function pengajuan()
    {
        $pelayanan = JenisPelayanan::all();

        return view('users.service.pengajuan.pengajuan', compact('pelayanan'));
    }

    public function pengajuanDetail($id)
    {
        $pengajuan = SuratPengantar::findOrFail($id);

        // Cek jika pengajuan milik user
        if ($pengajuan->user_id != auth()->user()->id) {
            return redirect()->route('dashboard.user');
        }

        // Update status notifikasi
        if (request('is_read') == 2) {
            Notifikasi::where('link_notifikasi', $id)->update(['status_notifikasi' => Notifikasi::STATUS_READ]);
        }

        return view('users.service.pengajuan.pengajuan-detail', compact('pengajuan'));
    }

    public function pengajuanStore(StorePengajuanRequest $request)
    {
        $data = $request->validated();

        // Upload file to storage.
        $file_name = $request->file('file_berkas')->store('pengajuan', 'public');

        $data['file_berkas'] = $file_name;
        $data['orginal_name_berkas'] = $request->file('file_berkas')->getClientOriginalName();

        $pengajuan = SuratPengantar::create($data);
        Notifikasi::create([
            'user_id' => $data['user_id'],
            'status_notifikasi' => Notifikasi::STATUS_UNREAD,
            'judul_notifikasi' => 'Pengajuan berhasil dibuat',
            'isi_notifikasi' => 'Pengajuan anda berhasil dibuat, silahkan menunggu proses selanjutnya',
            'link_notifikasi' => $pengajuan->id,
            'tipe_notifikasi' => Notifikasi::TYPE_PENGAJUAN
        ]);

        return redirect()->route('pengajuan.detail', $pengajuan->id);
    }
}

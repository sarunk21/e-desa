<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Antrian;
use App\Models\Pengaduan;
use App\Models\Notifikasi;
use App\Models\SuratPengantar;

use App\Http\Requests\Admin\UpdateStatusPengajuanRequest;

class AdminServiceController extends Controller
{
    // Antrian
    public function antrian()
    {
        $antrian = Antrian::where('created_at', 'like', date('Y-m-d') . '%')
            ->orderBy('created_at', 'asc')->take(20)->get();

        return view('admin.layanan.antrian.index', compact('antrian'));
    }

    // Pengajuan
    public function pengajuan()
    {
        $pengajuan = SuratPengantar::orderBy('created_at', 'desc')
            ->orderBy('status_pengajuan', 'asc')->paginate(20);

        return view('admin.layanan.pengajuan.index', compact('pengajuan'));
    }

    public function pengajuanDetail($id)
    {
        $pengajuan = SuratPengantar::findOrFail($id);

        return view('admin.layanan.pengajuan.show', compact('pengajuan'));
    }

    public function pengajuanUpdate(UpdateStatusPengajuanRequest $request, $id)
    {
        $data = $request->validated();

        $pengajuan = SuratPengantar::findOrFail($id);
        $pengajuan->update($data);

        switch ($pengajuan->status_pengajuan) {
            case SuratPengantar::STATUS_APPROVED:
                $status = 'Verifikasi Berhasil';
                break;

            case SuratPengantar::STATUS_REJECTED:
                $status = 'Verifikasi Gagal';
                break;

            case SuratPengantar::STATUS_DONE:
                $status = 'Selesai';
                break;
            default:
                $status = 'Menunggu Verifikasi';
                break;
        }

        Notifikasi::create([
            'user_id' => $pengajuan->user_id,
            'status_notifikasi' => Notifikasi::STATUS_UNREAD,
            'judul_notifikasi' => 'Status pengajuan ' . $status,
            'isi_notifikasi' => 'Status pengajuan ' . $status . ', silahkan cek detail pengajuan anda',
            'link_notifikasi' => $pengajuan->id,
            'tipe_notifikasi' => Notifikasi::TYPE_PENGAJUAN
        ]);

        return redirect()->route('admin.pengajuan.index')->with('success', 'Status pengajuan berhasil diubah!');
    }

    // Pengaduan
    public function pengaduan()
    {
        $pengaduan = Pengaduan::orderBy('created_at', 'desc')->paginate(20);

        return view('admin.layanan.pengaduan.index', compact('pengaduan'));
    }

    public function pengaduanDetail($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        return view('admin.layanan.pengaduan.show', compact('pengaduan'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;

class GuestController extends Controller
{
    public function wellcome()
    {
        $jumlah_notifikasi = Notifikasi::where('user_id', auth()->user()->id)->where('status_notifikasi', Notifikasi::STATUS_UNREAD)->count();

        return view('wellcome', compact('jumlah_notifikasi'));
    }

    public function informasi()
    {
        $jumlah_notifikasi = Notifikasi::where('user_id', auth()->user()->id)->where('status_notifikasi', Notifikasi::STATUS_UNREAD)->count();

        return view('informasi', compact('jumlah_notifikasi'));
    }
}

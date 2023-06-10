<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Antrian;

class AdminServiceController extends Controller
{
    // Antrian
    public function antrian()
    {
        $antrian = Antrian::where('created_at', 'like', date('Y-m-d') . '%')
            ->orderBy('created_at', 'desc')->take(20)->get();

        return view('admin.layanan.antrian.index', compact('antrian'));
    }
}

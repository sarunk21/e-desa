<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
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
}

<?php

namespace App\Http\Controllers;

class GuestController extends Controller
{
    public function wellcome()
    {
        return view('wellcome');
    }

    public function informasi()
    {
        return view('informasi');
    }
}

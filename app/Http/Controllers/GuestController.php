<?php

namespace App\Http\Controllers;

class GuestController extends Controller
{
    public function wellcome()
    {
        return view('wellcome');
    }

    public function profile()
    {
        return view('profile');
    }
}

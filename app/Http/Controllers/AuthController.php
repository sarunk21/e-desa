<?php

namespace App\Http\Controllers;

// Models
use App\Models\User;

// Facades
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// Requests
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginUser(LoginRequest $request)
    {
        $data = $request->validated();

        if (Auth::attempt($data)) return redirect()->route('dashboard.user');

        return redirect()->route('login')->with('error', 'NIK atau password salah!');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerUser(RegisterRequest $request)
    {
        $data = $request->all();

        $data['phone_number'] = str_replace('-', '', $data['phone_number']);
        $password = Carbon::parse($data['tanggal_lahir'])->format('dmY');
        $data['password'] = Hash::make($password);

        if ($data['user_type'] != User::USER_TYPE_USER) return redirect()->route('register');

        User::create($data);

        return redirect()->route('login')->with('success', 'Berhasil mendaftar!');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}

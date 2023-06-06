<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginUser(LoginRequest $request)
    {
        $data = $request->validated();

        User::loginUser($data);
    }

    public function register()
    {

    }

    public function registerUser()
    {

    }
}

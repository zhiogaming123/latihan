<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        return "Register berhasil (dummy dulu)";
    }

    public function login(Request $request)
{
    return "Login berhasil (dummy dulu)";
}
}
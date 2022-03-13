<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function doLogin(Request $request)
    {
        $data = User::where('email', $request->email)->first();

        if ($data) {
            if ($request->password == $data->password) {
                $data = [
                    'nama' => $data->nama,
                    'level' => $data->level,
                ];
                session($data);
                return redirect('/');
            } else {
                return 'password salah';
            }
        } else {
            return 'User tidak ditemukan';
        }
    }

    public function logout()
    {
        $data = ['nama', 'level'];
        session()->forget($data);
        return redirect('login');
    }
}

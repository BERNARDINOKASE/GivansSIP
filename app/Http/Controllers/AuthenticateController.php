<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthenticateController extends Controller
{
    public function login()
    {
        return view('auth.newLogin');
    }

    public function register()
    {
        return view('auth.newRegister');
    }

    //user login method
    public function store(Request $request)
    {
        Session::flash('email', $request->email);

        $request->validate([
            'email' => 'required|exists:users,email',
            // 'password' => 'required|exists:users,password',
        ], [
            'email.required' => 'Eemail wajib diisi',
            'email.exists' => 'Email tidak terdaftar',
            'password.required' => 'Password wajib diisi'
        ]);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($login)) {
            if (Auth::user()->role == 'guest') {
                return view('content.guest.index');
            }
            if (Auth::user()->role == 'student') {
                return view('content.student.index');
            }
            if (Auth::user()->role == 'admin') {
                return to_route('admin.index');
            }
        } else {
            return to_route('login')->withErrors('Username atau password anda salah');
        }
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Berhasil',
            'alert-type' => 'success'
        );

        return redirect('/')->with($notification);
    }
}
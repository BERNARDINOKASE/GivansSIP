<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        try {
            $request->validate([
                'second_id' => ['unique:users,second_id', 'required', 'string', 'max:18', 'min:9'],
                'full_name' => ['required', 'string', 'max:255'],
                'gender' => ['required'],
                'phone_number' => ['max:13', 'min:10', 'string'],
                'role' => ['required'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                'password' => ['required', 'confirmed']
            ], [
                'second_id.required' => 'NIS/NIP wajib diisi',
                'second_id.unique' => 'NIS/NIP anda sudah terdaftar',
                'second_id.max' => 'NIS/NIP anda melebihi 18 karakter',
                'second_id.min' => 'NIS/NIP anda kurang dari 9 karakter',
                'full_name.required' => 'Nama anda wajib diisi',
                'gender.required' => 'Jenis kelamin wajib diisi',
                'phone_number.max' => 'No hp anda sudah lebih dari 13 angka',
                'phone_number.min' => 'No hp anda kurang dari 10 angka',
                'email.required' => 'Email wajib diisi',
                'email.lowercase' => 'Email hanya menggunakan huruf kecil',
                'email.unique' => 'Email anda sudah terdaftar',
                'password.required' => 'Password wajib diisi'
            ]);

            $user = User::create([
                'second_id' => $request->second_id,
                'full_name' => $request->full_name,
                'gender' => $request->gender,
                'phone_number' => $request->phone_number,
                'role' => $request->role,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            event(new Registered($user));

            // Auth::login($user);
            // return redirect(RouteServiceProvider::HOME);

            return response()->json([
                'status' => 200,
                'message' => 'OK',
                'data' => $user
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'status' => 400,
            ]);
        }
    }
}

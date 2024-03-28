<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use App\Models\Report;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $students = User::select('role')->where('role', 'siswa')->count();
        $hrTeacher = User::select('role')->where('role', 'walikelas')->count();
        $gTeacher = User::select('role')->where('role', 'guruBk')->count();
        $classRooms = ClassRoom::count();
        $reports = Report::count();
        return view('content.admin.index', compact('reports', 'students', 'hrTeacher', 'gTeacher', 'classRooms'));
    }

    public function student()
    {
        $student = User::where('role', 'siswa')->get();
        // dd($student);
        return view('content.admin.users.student', compact('student'));
    }

    public function headRoomTeacher()
    {
        $headRoomTeacher = User::where('role', 'walikelas')->get();
        // dd($headRoomTeacher);
        return view('content.admin.users.headRoomTeaher', compact('headRoomTeacher'));
    }

    public function guideTeacher()
    {
        $guideTeacher = User::where('role', 'guruBk')->get();
        // dd($guideTeacher);
        return view('content.admin.users.guideTeacher', compact('guideTeacher'));
    }

    public function affairsTeacher()
    {
        $affairsTeacher = User::where('role', 'kesiswaan')->get();
        // dd($affairsTeacher);
        return view('content.admin.users.affairsTeacher', compact('affairsTeacher'));
    }

    public function headMaster()
    {
        $headMaster = User::where('role', 'kepalaSekolah')->get();
        // dd($headMaster);
        return view('content.admin.users.headMaster', compact('headMaster'));
    }

    public function addNewUser()
    {
        return view('content.admin.users.userRegister');
    }

    public function storeNewUser(Request $request)
    {
        $request->validate([
            'second_id' => ['unique:users,second_id', 'required', 'string', 'max:18', 'min:9'],
            'full_name' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'phone_number' => ['max:13', 'min:10', 'string', 'nullable'],
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
            'role.required' => 'Peran wajib diisi',
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

        // event(new Registered($user));

        // Auth::login($user);
        return back()->with('success', 'Berhasil menambahkan pengguna baru');
    }
}

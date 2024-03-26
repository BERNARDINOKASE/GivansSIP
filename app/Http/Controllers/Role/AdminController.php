<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

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
}

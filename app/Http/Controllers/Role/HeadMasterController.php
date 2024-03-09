<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\CriticAndSuggest;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class HeadMasterController extends Controller
{
    public function index()
    {
        $critic = CriticAndSuggest::count();
        $report = Report::count();
        $student = User::where('role', 'student')->count();
        $hrTeacher = User::where('role', 'hrTeacher')->count();

        return view('content.headMaster.index', compact('critic', 'student', 'hrTeacher', 'report'));
    }
    public function getAllcriticAndSuggest()
    {
        $data = CriticAndSuggest::all();
        // dd($data);
        return view('content.headMaster.criticAndSuggest.getAllCriticAndSuggest', compact('data'));
    }

    public function getAllHeadroomTeacher()
    {
        $data = User::where('role','walikelas')->get();
        return view('content.headMaster.headRoomTeacher.getAllHeadroomTeacher', compact('data'));
    }

    public function getAllStudents()
    {
        $data = User::where('role','siswa')->get();
        return view('content.headMaster.student.getAllStudents', compact('data'));
    }
}

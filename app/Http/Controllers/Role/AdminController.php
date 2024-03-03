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
        $students = User::select('role')->where('role', 'student')->count();
        $hrTeacher = User::select('role')->where('role', 'hrTeacher')->count();
        $gTeacher = User::select('role')->where('role', 'gTeacher')->count();
        $classRooms = ClassRoom::count();
        $reports = Report::count();
        return view('content.admin.index', compact('reports', 'students', 'hrTeacher', 'gTeacher', 'classRooms'));
    }
}

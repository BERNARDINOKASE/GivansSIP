<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class HeadMasterController extends Controller
{
    public function index()
    {
        $report = Report::all();
        $student = User::where('role', 'student')->get();
        $hrTeacher = User::where('role', 'hrTeacher')->get();
        dd($report, $student, $hrTeacher);
    }
}

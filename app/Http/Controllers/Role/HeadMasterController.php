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
}

<?php

namespace App\Http\Controllers\Role;


use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AffairsTeacherController extends Controller
{
    public function index()
    {
        $reportWaiting = Report::where('status', 'proses')
            ->where('affairs_teacher_id', Auth::user()->id)->count();
        return view('content.guideTeacher.index', compact('reportWaiting'));
    }
}

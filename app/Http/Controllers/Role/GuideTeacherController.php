<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuideTeacherController extends Controller
{
    public function index()
    {
        $reportWaiting = Report::where('status', 'menunggu')
            ->where('head_room_teacher_id', Auth::user()->id)->count();
        return view('content.guideTeacher.index', compact('reportWaiting'));
    }
    public function report()
    {
        $report = Report::where('head_room_teacher_id', Auth::user()->id)->get();
        // dd($report);
        return view('content.report.index', compact('report'));
    }
}

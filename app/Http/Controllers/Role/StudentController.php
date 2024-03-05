<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function  index()
    {
        $reportProcess = Report::where('users_id', Auth::id())->where('status', 'proses ')->count();
        $reports = Report::where('users_id', Auth::id())->count();
        $reportSuccess = Report::where('users_id', Auth::id())->where('status', 'selesai')->count();
        return view('content.student.index', compact('reportProcess', 'reports', 'reportSuccess'));
    }
}

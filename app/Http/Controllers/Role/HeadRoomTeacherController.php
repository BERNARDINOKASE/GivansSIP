<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\ClassRoom;
use App\Models\Offense;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class headRoomTeacherController extends Controller
{
    public function index()
    {
        $studentCount = User::where('class_room_id', Auth::user()->class_room_id)
            ->where('role', 'student')->count();

        $student = DB::table('users')->select('id')->where('class_room_id', Auth::user()->class_room_id);

        // User::where('class_room_id', Auth::user()->class_room_id)
        //     ->where('role', 'student');

        $reportStudentWaiting = Report::whereIn('users_id', $student)
            ->where('status', 'menunggu')->count();

        $reportStudentOnProgress = Report::whereIn('users_id', $student)
            ->where('status', 'proses')->count();

        $reportStudentSuccess = Report::whereIn('users_id', $student)
            ->where('status', 'selesai')->count();

        return view('content.headRoomTeacher.index', compact('studentCount', 'reportStudentWaiting', 'reportStudentSuccess', 'reportStudentOnProgress'));
    }

    public function reportWaiting()
    {
        $student = DB::table('users')->select('id')->where('class_room_id', Auth::user()->class_room_id);
        $reportWaiting = Report::whereIn('users_id', $student)
            ->where('status', 'menunggu')->get();
        // dd($reportWaiting);
        return view('content.headRoomTeacher.reportWaiting', compact('reportWaiting'));
    }

    public function reportOnProgress()
    {
        $student = DB::table('users')->select('id')->where('class_room_id', Auth::user()->class_room_id);
        $reportOnProgress = Report::whereIn('users_id', $student)
            ->where('status', 'proses')->get();
        return view('content.headRoomTeacher.reportOnProgress', compact('reportOnProgress'));
    }
    public function reportSuccess()
    {
        $student = DB::table('users')->select('id')->where('class_room_id', Auth::user()->class_room_id);
        $reportStudentSuccess = Report::whereIn('users_id', $student)
            ->where('status', 'selesai')->get();
        // dd($reportStudentSuccess);
        return view('content.headRoomTeacher.reportSuccess', compact('reportStudentSuccess'));
    }

    public function reportEdit($id)
    {
        $student = DB::table('users')->select('id')
            ->where('class_room_id', Auth::user()->class_room_id);
        $report = Report::whereIn('users_id', $student)
            ->where('id', $id)->first();
        $offense = Offense::all();

        $reportUserName = DB::table('reports')->select('users_id');
        $userName = User::wherein('id', $reportUserName)->select('id')->first();
        // $full_name = User::select('full_name')->where('id', $userName)->get();
        // dd($full_name);
        return view('content.headRoomTeacher.editReport', compact('report', 'offense', 'userName'));
    }

    public function reportUpdate(Request $request, $id)
    {
        $request->validate([
            'solutions' => ['nullable'],
            'notes' => ['nullable'],
            'status' => ['required']
        ]);

        $requestReports = [
            'solutions' => $request->solutions,
            'notes' => $request->notes,
            'status' => $request->status,
        ];

        Report::where('id', $id)->update($requestReports);
        if ($request->status == "proses") {
            return to_route('hrTeacher.reportOnProgress');
        } elseif ($request->status == "menunggu") {
            return to_route('hrTeacher.reportsWaiting');
        }
        return to_route('hrTeacher.index');
    }

    public function reportShow($reportId)
    {
        $report = Report::where('id', $reportId)->first();
        return view('content.headRoomTeacher.showReport', compact('report'));
    }

    public function reportUserShow($reportId, $userId)
    {
        Report::where('id', $reportId);
        User::where('id', $userId)->get();
        // dd($userId, $report);
        return view('content.headRoomTeacher.reportUser');
    }
}

<?php

namespace App\Http\Controllers\Role;


use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AffairsTeacherController extends Controller
{
    public function index()
    {
        $reportWaiting = Report::where('status', 'proses')
            ->where('affairs_teacher_id', Auth::user()->id)->count();
        return view('content.affairsTeacher.index', compact('reportWaiting'));
    }
    public function report()
    {
        $report = Report::where('affairs_teacher_id', Auth::user()->id)->get();
        // dd($report);
        return view('content.affairsTeacher.report.reportIndex', compact('report'));
    }

    public function reportEdit($id)
    {
        $report = Report::where('id', $id)->first();
        $headMaster = User::where('role', 'kepalaSekolah')->get();
        // $offense = Offense::all();
        // dd($report);
        return view('content.affairsTeacher.report.reportEdit', compact('report', 'headMaster'));
    }

    public function reportUpdate(Request $request, $id)
    {
        $request->validate([
            'solutions' => ['nullable'],
            'affairs_teacher_notes' => ['nullable'],
            'status' => ['required'],
            'head_master_teacher_id' => ['nullable'],
        ]);

        $requestReports = [
            'solutions' => $request->solutions,
            'affairs_teacher_notes' => $request->affairs_teacher_notes,
            'status' => $request->status,
            // 'head_room_teacher_id' => Auth::user()->id,
            'head_master_id' => $request->head_master_id

        ];

        $data = Report::where('id', $id)->update($requestReports);
        // dd($data);
        return to_route('affairsTeacher.report');
    }

    public function reportShow($reportId)
    {
        $report = Report::where('id', $reportId)->first();
        // dd($report);
        return view('content.affairsTeacher.report.reportShow', compact('report'));
    }
}

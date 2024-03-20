<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\Offense;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

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
        $report = Report::where('guide_teacher_id', Auth::user()->id)->get();
        // dd($report);
        return view('content.guideTeacher.report.reportIndex', compact('report'));
    }

    public function reportEdit($id)
    {
        $report = Report::where('id', $id)->first();
        $affairsTeacher = User::where('role', 'kesiswaan')->get();
        // $offense = Offense::all();
        // dd($report);
        return view('content.guideTeacher.report.reportEdit', compact('report', 'affairsTeacher'));
    }

    public function reportUpdate(Request $request, $id)
    {
        $request->validate([
            'solutions' => ['nullable'],
            'guide_teacher_notes' => ['nullable'],
            'status' => ['required'],
            'affairs_teacher_id' => ['nullable'],
        ]);

        $requestReports = [
            'solutions' => $request->solutions,
            'guide_teacher_notes' => $request->guide_teacher_notes,
            'status' => $request->status,
            // 'head_room_teacher_id' => Auth::user()->id,
            'affairs_teacher_id' => $request->affairs_teacher_id

        ];

        $data = Report::where('id', $id)->update($requestReports);
        // dd($data);
        return to_route('guideTeacher.index');
    }

    public function reportShow($reportId)
    {
        $report = Report::where('id', $reportId)->first();
        // dd($report);
        return view('content.guideTeacher.report.reportShow', compact('report'));
    }
}

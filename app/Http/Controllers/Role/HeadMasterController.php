<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\CriticAndSuggest;
use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function report()
    {
        $report = Report::where('head_master_id', Auth::user()->id)->get();
        // dd($report);
        return view('content.headMaster.report.reportIndex', compact('report'));
    }

    public function reportEdit($id)
    {
        $report = Report::where('id', $id)->first();
        // $headMaster = User::where('role', 'kepalaSekolah')->get();
        // $offense = Offense::all();
        // dd($report);
        return view('content.headMaster.report.reportEdit', compact('report'));
    }

    public function reportUpdate(Request $request, $id)
    {
        $request->validate([
            'solutions' => ['nullable'],
            'head_master_notes' => ['required', 'min:10'],
            'status' => ['required'],
            // 'head_master_teacher_id' => ['nullable'],
        ], [
            'head_master_notes.required' => 'Catatan kepala sekolah wajib diisi',
            'head_master_notes.min' => 'Catatan kepala sekolah wajib diisi minimal 10 karakter'
        ]);

        $requestReports = [
            'solutions' => $request->solutions,
            'head_master_notes' => $request->head_master_notes,
            'status' => $request->status,
            // 'head_room_teacher_id' => Auth::user()->id,
            // 'head_master_id' => $request->head_master_id
        ];

        $data = Report::where('id', $id)->update($requestReports);
        // dd($data);
        return to_route('headMaster.report')->with('success', 'Pengaduan berhasil di proses.');
    }

    public function reportShow($reportId)
    {
        $report = Report::where('id', $reportId)->first();
        // dd($report);
        return view('content.headMaster.report.reportShow', compact('report'));
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

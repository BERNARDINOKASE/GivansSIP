<?php

namespace App\Http\Controllers;

use App\Models\Offense;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        $report = Report::orderBy('updated_at', 'DESC')
            ->where('users_id', Auth::id())->get();
        $offense = Offense::all();
        // dd($report);
        return view('content.report.index', compact('report', 'offense'));
    }

    public function create()
    {
        $offense = Offense::all();
        return view('content.report.create', compact('offense'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'offense_id' => ['required', 'exists:offenses,id'],
            'date_of_incident' => ['required', 'date'],
            'location_of_incident' => ['required', 'string'],
            'chronology' => ['required', 'string'],
            'evidence' => ['required'],
        ], [
            'offense_id.required' => 'Kategori pengajuan belum diisi',
            'date_of_incident.required' => 'Tanggal kejadian belum diisi',
            'location_of_incident.required' => 'Lokasi kejadian belum diisi',
            'chronology.required' => 'Kronologi belum diisi',
            'evidence.required' => 'Bukti belum diisi',
            'date_of_incident.date' => 'Bukan bertipe tanggal',
            'offense_id.exists' => 'Kategori tidak terdaftar di dalam sistem',
        ]);

        $requestReports = [
            'users_id' => Auth::id(),
            'offense_id' => $request->offense_id,
            'date_of_incident' => $request->date_of_incident,
            'location_of_incident' => $request->location_of_incident,
            'chronology' => $request->chronology,
            'evidence' => $request->evidence,
        ];

        $data = Report::create($requestReports);
        return to_route('report.index');
    }
    public function edit(string $id)
    {
        $report = Report::where('id', $id)->first();
        $offense = Offense::all();
        // dd($report);
        return view('content.report.edit', compact('offense', 'report'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'offense_id' => ['required', 'exists:offenses,id'],
            'date_of_incident' => ['required', 'date'],
            'location_of_incident' => ['required', 'string'],
            'chronology' => ['required', 'string'],
            'evidence' => ['required'],
            'solutions' => ['nullable'],
            'notes' => ['nullable'],
        ]);

        $requestReports = [
            'users_id' => Auth::id(),
            'offense_id' => $request->offense_id,
            'date_of_incident' => $request->date_of_incident,
            'location_of_incident' => $request->location_of_incident,
            'chronology' => $request->chronology,
            'evidence' => $request->evidence,
            'solutions' => $request->solutions,
            'notes' => $request->notes,
        ];

        Report::where('id', $id)->update($requestReports);
        return to_route(('report.index'));
    }

    public function show(string $id)
    {
        $report = Report::where('id', $id)
            ->where('users_id', Auth::id())->first();
        // dd($report);
        return view('content.report.show', compact('report'));
    }

    public function destroy($id)
    {
        Report::where('id', $id)->delete();
        return redirect()->back();
    }
}

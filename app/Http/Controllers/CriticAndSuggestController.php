<?php

namespace App\Http\Controllers;

use App\Models\CriticAndSuggest;
use Illuminate\Http\Request;

class CriticAndSuggestController extends Controller
{
    public function index()
    {
        return view('content.criticAndSuggest.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'category' => ['required'],
            'descriptions' => ['required'],
            'evidence' => ['nullable'],
        ], [
            'category.required' => 'Kategori wajib diisi.',
            'descriptions.required' => 'Deskripsi wajib diisi.',
            'evidence.required' => 'Bukti wajib diisi.'
        ]);

        $requestCriticAndSuggest = [
            'category' => $request->category,
            'descriptions' => $request->descriptions,
            'evidence' => $request->evidence,
        ];

        CriticAndSuggest::create($requestCriticAndSuggest);
        return redirect()->back()->with('success', 'Terima kasih telah melapor. Laporan berhasil disimpan dan akan diproses.');
    }
}

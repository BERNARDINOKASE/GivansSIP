<?php

namespace App\Http\Controllers;

use App\Models\CriticAndSuggest;
use Illuminate\Http\Request;

class CriticAndSuggestController extends Controller
{
    public function index()
    {
        // return to view
    }
    public function store(Request $request)
    {
        $request->validate([
            'category' => ['required'],
            'description' => ['required'],
            'evidence' => ['required'],
        ], [
            'category.required' => 'Kategori wajib diisi.',
            'description.required' => 'Deskripsi wajib diisi.',
            'evidence.required' => 'Bukti wajib diisi.'
        ]);

        $requestCriticAndSuggest = [
            'category' => $request->category,
            'description' => $request->description,
            'evidence' => $request->evidence,
        ];
        
        $data = CriticAndSuggest::create($requestCriticAndSuggest);
    }
}

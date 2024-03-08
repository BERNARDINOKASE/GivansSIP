<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offense;

class OffenseController extends Controller
{

    public function index()
    {
        return view('content.offense.index',[
            'offense'=> Offense::get()
        ]);    
    }

    public function store(Request $request)
    {
        $data = $request ->validate([
            'name'=> 'required|min:5'
        ]);
        Offense::create($data);
        return back()->with('success','Kasus Berhasil Ditambahkan');
        
    }


    public function update(Request $request, string $id)
    {
        
        
    }

  
    public function destroy(string $id)
    {
        Offense::find($id)->delete();
        return back()->with('success','Kasus Berhasil Dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;
use App\Models\Role;
use Illuminate\Foundation\Bootstrap\HandleExceptions;

class ClassRoomController extends Controller
{
    public function index(Request $request)
    {
        $kelas = $request->query('kelas', 'X'); 
        $class = ClassRoom::where('name', $kelas)->get();
    
        return view('content/classroom/index', [
            'classRoomList' => $class,
            'kelas' => $kelas, 
        ]);
    }
    
    public function create()
    {
        $class = ClassRoom::all();
        return view('content/classroom/index', ['class' => $class]);
    }

    public function store(Request $request)
    {
    
        $class = new ClassRoom;
        $class->name = $request->name;
        $class->class = $request->class;
        $class->save();
        return back();
    }
    
    public function destroy($id)
    {
        ClassRoom::where('id', $id)->delete();
        return redirect()->back();
    }
}

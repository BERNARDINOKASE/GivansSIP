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
        $class = ClassRoom::where('name', $kelas)->orderBy('class','asc')->get();
    
        return view('content.classroom.index', [
            'classRoomList' => $class,
            'kelas' => $kelas, 
        ]);

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'in:X,XI,XII'],
            'class' => ['required', 'string','max:1'],
        ]);

        $requestClassRoom = [
            'name' => $request->name,
            'class' => $request->class,
        ];

        $data = ClassRoom::create($requestClassRoom);
        return redirect()->back();
    }
    
    public function edit(string $id)
    {
        $class = ClassRoom::where('id', $id)->first();
        return view('content.classroom.edit', compact( 'class'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'in:X,XI,XII'],
            'class' => ['required', 'string','max:1'],
        ]);

        $requestClassRoom = [
            'name' => $request->name,
            'class' => $request->class,
        ];

        ClassRoom::where('id', $id)->update($requestClassRoom);
        return to_route(('classroom.index'));
    }

    public function show(string $id)
    {
        $classroom = ClassRoom::where('id', $id)->first();
        return view('content.classroom.show', compact('classroom'));
    }

    public function destroy($id)
    {
        ClassRoom::where('id', $id)->delete();
        return redirect()->back();
    }
}

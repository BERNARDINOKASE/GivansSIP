<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuideTeacherController extends Controller
{
    public function index()
    {
        return view('content.guideTeacher.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        //eager loading
        $teacher = Teacher::all();
        return view('teacher.teacher', ['teacher' => $teacher]);
    }

    public function show($id)
    {
        $teacher = Teacher::with(['class.students'])
            ->findOrFail($id);
        return view('teacher.teacher_detail', ['teacher' => $teacher]);
    }

    public function create()
    {
        return view('teacher.teacher_add');
    }

    public function store(Request $request)
    {
        $teacher = new Teacher;
        $teacher->create($request->all());
        return redirect('/teacher');
    }
}

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

        $validated = $request->validate([
            'name' => 'required|max:50',
        ]);

        $teacher->create($request->all());
        return redirect('/teacher')->with('success', 'Teacher added successfully');
    }

    public function edit(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher.teacher_edit', ['teacher' => $teacher]);
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        return redirect('/teacher')->with('success', 'Teacher update successfully');
    }
}

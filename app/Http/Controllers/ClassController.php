<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        //eager load
        $data = ClassRoom::get();
        return view('classroom.class', ['class' => $data]);
    }

    public function show($id)
    {
        $class = ClassRoom::with(['students', 'homeroomTeacher'])->findOrFail($id);
        return view('classroom.class_detail', ['class' => $class]);
    }

    public function create()
    {
        $teacher = Teacher::all();
        return view('classroom.class_add', ['teacher' => $teacher]);
    }

    public function store(Request $request)
    {
        $class = new ClassRoom;

        $validated = $request->validate([
            'name' => 'required|max:50',
            'teacher_id' => 'required|',
        ]);

        $class->create($request->all());
        return redirect('/class')->with('success', 'Class added successfully');
    }

    public function edit(Request $request, $id)
    {
        $class = ClassRoom::with('homeroomTeacher')->findOrFail($id);
        $allClasses = ClassRoom::with('homeroomTeacher')->get();
        $allTeachers = Teacher::all();
        return view('classroom.class_edit', ['allClasses' => $allClasses, 'class' => $class,  'allTeachers' => $allTeachers]);
    }

    public function update(Request $request, $id)
    {
        $class = ClassRoom::findOrFail($id);
        $class->update($request->all());
        return redirect('/class')->with('success', 'Class updated successfully');
    }
}

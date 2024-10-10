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
        $class->create($request->all());
        return redirect('/class');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        //eager loading
        $data = Student::with('extra')->get();
        return view('students.students', ['students' => $data]);
    }

    public function show($id)
    {
        $student = Student::with(['class.homeroomTeacher', 'extra'])
            ->findOrFail($id);
        return view('students.students_detail', ['student' => $student]);
    }

    public function create()
    {
        $class = ClassRoom::select('id', 'name')->get();
        return view('students.students_add', ['class' => $class]);
    }

    public function store(Request $request)
    {
        $student = new Student;
        // $student->fullname = $request->fullname;
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->class_id = $request->class_id;
        // $student->save();

        $student->create($request->all());
    }
}

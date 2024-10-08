<?php

namespace App\Http\Controllers;

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
}

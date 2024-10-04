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
        $data = Student::with(['class.homeroomTeacher', 'extras'])->get();
        return view('students', ['students' => $data]);
    }
}

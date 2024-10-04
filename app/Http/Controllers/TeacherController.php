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
        return view('teacher', ['teacher' => $teacher]);
    }
}
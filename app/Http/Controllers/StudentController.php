<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        //--- ELOQUENT ORM ---
        //get
        $data = Student::all();
        return view('students', ['students' => $data]);

        //post
        // Student::create([
        //     'fullname' => 'eloquent orm',
        //     'gender' => 'P',
        //     'nis' => '21023322',
        //     'class_id' => 2
        // ]);

        //put
        // Student::findOrFail(21)->update([
        //     'fullname' => 'eloquent 3',
        //     'class_id' => 2,
        //     'gender' => 'P'
        // ]);

        //delete
        // Student::findOrFail(21)->delete();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {

        // --- QUERY BUILDER ---
        //get 
        // $data = DB::table('students')->get();
        // return view('students', ['students' => $data]);

        //post 
        // DB::table('students')->insert([
        //     'fullname' => 'query builder',
        //     'gender' => 'L',
        //     'nis' => '21023365',
        //     'class_id' => 1
        // ]);

        //put 
        // DB::table('students')
        //     ->where('id', 22)
        //     ->update(['fullname' => 'andy eloquent']);

        //delete 
        // DB::table('students')->where('id', 22)->delete();




        //--- ELOQUENT ORM ---
        //get
        // $data = Student::all();
        // return view('students', ['students' => $data]);

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

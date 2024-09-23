<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        //lazy load 
        // $data = ClassRoom::all(); // request data hanya dari 1 tabel saja, tabel relasinya tidak di query 
        //select * from class

        //eager load
        $data = ClassRoom::with('student')->get(); // request data bisa dari beberapa tabel 
        //select * from class
        //SELECT * FROM students WHERE class_id IN ('1a', '1b', '1c', '1d');
        return view('class', ['class' => $data]);
    }
}

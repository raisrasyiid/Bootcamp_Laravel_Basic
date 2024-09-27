<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function index()
    {
        $data = Extra::with('students')->get();
        return view('extra', ['extra' => $data]);
    }
}

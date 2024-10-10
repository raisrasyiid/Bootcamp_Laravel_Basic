<?php

namespace App\Http\Controllers;

use App\Models\Extra;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function index()
    {
        $data = Extra::get();
        return view('extracurricular.extra', ['ekskul' => $data]);
    }

    public function show($id)
    {
        $extra = Extra::with(['students'])
            ->findOrFail($id);
        return view('extracurricular.extra_detail', ['extra' => $extra]);
    }

    public function create()
    {
        return view('extracurricular.extra_add');
    }

    public function store(Request $request)
    {
        $extra = new Extra;
        $extra->create($request->all());
        return redirect('/extra');
    }
}

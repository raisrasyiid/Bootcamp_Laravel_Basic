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

    public function edit(Request $request, $id)
    {
        $extra = Extra::findOrFail($id);
        return view('extracurricular.extra_edit', ['extra' => $extra]);
    }

    public function update(Request $request, $id)
    {
        $extra = Extra::findOrFail($id);
        $extra->update($request->all());
        return redirect('/extra')->with('success', 'data extra berhasil di update');
    }
}

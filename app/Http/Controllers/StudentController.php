<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StudentCreateRequest;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        // $data = Student::simplePaginate(20);
        $data = Student::with('class')
            ->where('fullname', 'LIKE', '%' . $keyword . '%')
            ->orWhere('gender', $keyword)
            ->orWhere('nis', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('class', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })
            ->paginate(15);
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

    public function store(StudentCreateRequest $request)
    {
        $newname = '';

        if ($request->file('gambar')) {
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName = $request->fullname . '-' . now()->timestamp . '.' . $extension;
            $request->file('gambar')->storeAs('photo/students', $newName);
        }

        $request['image'] = $newName;
        $student = Student::create($request->all());

        if ($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new students successfully');
        }
        return redirect('/students');
    }

    public function edit(Request $request, $id)
    {
        $student = Student::with('class')->findOrFail($id);
        $class = ClassRoom::where('id', '!=', $student->class->id)->get(['id', 'name']);
        return view('students.students_edit', ['student' => $student, 'class' => $class]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $request->validate([
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $newname = $student->image; //menggunakan file lama jika gambar tidak di update

        if ($request->file('gambar')) {
            //hapus file lama jika ada
            if ($student->image && Storage::exists('photo/students/' . $student->image)) {
                Storage::delete(['photo/students/' . $student->image]);
            };

            //simpan gambar baru
            $extension = $request->file('gambar')->getClientOriginalExtension(); // gunakan extension dari file yang diupload (png, jpg. jpeg)
            $newname = $request->fullname . '-' . now()->timestamp . '.' . $extension; // nama-waktu.jpg
            $request->file('gambar')->storeAs('photo/students', $newname); // masukan data ke folder
        }

        $student->update([
            'fullname' => $request->fullname,
            'gender' => $request->gender,
            'nis' => $request->nis,
            'class_id' => $request->class_id,
            'image' => $newname, // Gambar baru atau lama
        ]);

        if ($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'edit students successfully');
        }

        return redirect('/students');
    }

    public function delete($id)
    {
        $student = Student::findOrFail($id);
        return view('students.students_delete', ['student' => $student]);
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        if ($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'delete student success!');
        }
        return redirect('/students');
    }

    public function deletedStudent()
    {
        $data = Student::onlyTrashed()->get();
        return view('students.students_deleted', ['studentDelete' => $data]);
    }

    public function restore($id)
    {
        $restore = Student::withTrashed()->where('id', $id)->restore();
        if ($restore) {
            Session::flash('status', 'success');
            Session::flash('message', 'restore student success!');
        }
        return redirect('/students');
    }
}

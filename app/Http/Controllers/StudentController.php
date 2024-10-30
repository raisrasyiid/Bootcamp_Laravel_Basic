<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    public function index()
    {
        //eager loading
        // $data = Student::simplePaginate(20);
        $data = Student::paginate(20);
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

    public function store(Request $request)
    {
        $student = new Student;

        $validated = $request->validate([
            'name' => 'required|max:50',
            'nis' => 'required|unique:students|max:8',
            'gender' => 'required|',
            'class_id' => 'required|',
        ]);

        $student->create($request->all());
        return redirect('/students')->with('success', 'Student added successfully');
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
        $student->update($request->all());
        return redirect('/students')->with('success', 'Student update successfully');
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

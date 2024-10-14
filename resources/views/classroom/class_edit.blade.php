@extends('layout.template')
@section('title', 'Edit class')

@section('content')
<div class="container-fluid">
        <h1>Form edit data class</h1>
       <div class="mt-5 col-6 m-auto">
        <form action="/class/{{$class->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="control-group mb-3">
                <label for="class">Nama Kelas</label>
                <select name="class_id" id="class" class="form-control" required>
                    <!-- Kelas yang sedang diedit (selected) -->
                    <option value="{{ $class->id }}" selected>{{ $class->name }}</option>
                    <!-- Menampilkan daftar semua kelas -->
                    @foreach ($allClasses as $item)
                        <!-- Skip kelas yang sedang diedit dari daftar -->
                        @if ($item->id != $class->id)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="control-group mb-3">
                <label for="class">Nama Guru</label>
                <select name="teacher_id" id="class" class="form-control" required>
                    <!-- Guru yang sedang menjadi wali kelas (selected) -->
                    @if ($class->homeroomTeacher)
                        <option value="{{ $class->homeroomTeacher->id }}" selected>{{ $class->homeroomTeacher->name }}</option>
                    @else
                        <option value="" disabled selected>Pilih wali kelas</option>
                    @endif
                    
                    <!-- Menampilkan daftar semua guru -->
                    @foreach ($allTeachers as $teacher)
                        <!-- Skip guru yang sedang dipilih (jika sudah ada) -->
                        @if (!$class->homeroomTeacher || $teacher->id != $class->homeroomTeacher->id)
                            <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>            
            <div class="control-group mb-3">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
       </div>
        
@endsection

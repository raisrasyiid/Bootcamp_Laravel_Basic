@extends('layout.template')
@section('title', 'Edit Student')

@section('content')
<div class="container-fluid">
        <h1>Form edit data student</h1>
       <div class="mt-5 col-6 m-auto">
        <form action="/student/{{$student->id}}" method="POST">
            @csrf
            @method('PUT');
            <div class="control-group mb-3">
                <label for="name">name</label>
                <input type="text" name="fullname" value="{{$student->fullname}}" class="form-control" id="name" placeholder="masukan nama anda..." required>
            </div>
            <div class="control-group mb-3">
                <label for="gender">gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="{{$student->gender}}">{{$student->gender}}</option>
                    @if ($student->gender == 'L')
                        <option value="P">P</option>
                    @else
                        <option value="L">L</option>
                    @endif
                </select>
            </div>
            <div class="control-group mb-3">
                <label for="nis">nis</label>
                <input type="text" name="nis" value="{{$student->nis}}" class="form-control" id="nis" placeholder="masukan nis anda..." required>
            </div>
            <div class="control-group mb-3">
                <label for="class">class</label>
                <select name="class_id" id="class" class="form-control" required>
                    <option value="{{$student->class->id}}">{{$student->class->name}}</option>
                    @foreach ($class as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="control-group mb-3">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
       </div>
        
@endsection

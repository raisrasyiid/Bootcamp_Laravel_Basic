@extends('layout.template')
@section('title', 'Class')

@section('content')
<div class="container-fluid">
        <h1> Data Class </h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Class</th>
                    <th>Nama siswa</th>
                    <th>Wali Kelas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($class as $data)
                @foreach($data->student as $student)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$student['fullname']}}</td>
                    <td>{{$data->homeroomTeacher->name}}</td>
                </tr>
                @endforeach
                    @endforeach
            </tbody>
        </table>
        
      </div>
@endsection

@extends('layout.template')
@section('title', 'Students')

@section('content')
<div class="container-fluid">
        <h1>Data Mahasiswa</h1>
        @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
        @endif
        <div class="my-3">
            <a href="/student_add" class="btn btn-primary btn-sm">Add Data</a>
        </div>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>Namaku</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nis}}</td>
                        <td>{{$data->fullname}}</td>
                        <td>{{$data->gender}}</td>
                        <td class="text-center">
                            <a href="/student/{{$data->id}}" class="btn btn-primary btn-sm">Detail</a>
                            <a href="/student_edit/{{$data->id}}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/student_delete/{{$data->id}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

    <style>
        th {
            width: 15%;
        }
      </style>
@endsection

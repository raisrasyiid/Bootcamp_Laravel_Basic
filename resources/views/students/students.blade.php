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
        <div class="my-3 d-flex justify-content-between">
            <a href="/student_add" class="btn btn-primary btn-sm">Add Data</a>
            <a href="/students_deleted" class="btn btn-info btn-sm">Show deleted data</a>
        </div>
        <div class="my-3 col-12 col-sm-8 col-md-6">
            <form action="" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="keyword" placeholder="Entry keyword here...">
                    <button class="input-group-text btn btn-primary">Search</button>
                </div>
            </form>
        </div>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>Namaku</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
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
                        <td>{{$data->class->name}}</td>
                        <td class="text-center">
                            @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
                            -
                            @else
                            <a href="/student/{{$data->id}}" class="btn btn-primary btn-sm">Detail</a>
                            @endif
                            <a href="/student_edit/{{$data->id}}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/student_delete/{{$data->id}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <div class="my-5">
            {{ $students->withQueryString()->links()  }}
        </div>
    </div>

    <style>
        th {
            width: 15%;
        }
      </style>
@endsection

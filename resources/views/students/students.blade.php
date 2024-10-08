@extends('layout.template')
@section('title', 'Students')

@section('content')
<div class="container-fluid">
        <h1>Data Mahasiswa</h1>
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
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
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

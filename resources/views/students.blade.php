@extends('layout.template')
@section('title', 'Students')

@section('content')
<div class="container-fluid">
        <h1>Data Mahasiswa</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Namaku</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $data)
                    <tr>
                        <td>{{$data->nis}}</td>
                        <td>{{$data->fullname}}</td>
                        <td>{{$data->gender}}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
      </div>
@endsection

@extends('layout.template')
@section('title', 'Extrakurikuler')
    
@section('content')
<div class="container-fluid">
    <h1>Data Extrakurikuler</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama extra</th>
                <th>Nama siswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($extra as $data)
            @foreach ($data->students as $item)
            <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$item->fullname}}</td>
                </tr>
                    @endforeach
                @endforeach
        </tbody>
    </table>
  </div>
    
@endsection
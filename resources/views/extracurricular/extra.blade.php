@extends('layout.template')
@section('title', 'Extrakurikuler')
    
@section('content')
<div class="container-fluid">
    <h1>Data Extrakurikuler</h1>
    <div class="my-3">
        <a href="/extra_add" class="btn btn-primary btn-sm">Add Data</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama extra</th>
                <th style="width: 30%;" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ekskul as $data)
            <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td class="text-center">
                        <a href="/extra_detail/{{$data->id}}" class="btn btn-primary btn-sm">Detail</a>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
  </div>
    
@endsection
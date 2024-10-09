@extends('layout.template')
@section('title', 'Teacher')
    
@section('content')
<div class="container-fluid">
    <h1>Data Teacher</h1>
    <div class="my-3">
        <a href="#" class="btn btn-primary btn-sm">Add Data</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Teacher</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacher as $data)
            <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td class="text-center">
                        <a href="/teacher_detail/{{$data->id}}" class="btn btn-primary btn-sm">Detail</a>
                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
  </div>
    
@endsection
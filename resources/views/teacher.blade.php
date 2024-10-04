@extends('layout.template')
@section('title', 'Teacher')
    
@section('content')
<div class="container-fluid">
    <h1>Data Teacher</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Teacher</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacher as $data)
            <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
  </div>
    
@endsection
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
                </tr>
            </thead>
            <tbody>
                @foreach ($class as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->name}}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        
      </div>
@endsection

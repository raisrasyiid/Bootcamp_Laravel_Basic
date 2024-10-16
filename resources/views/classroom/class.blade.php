@extends('layout.template')
@section('title', 'Class')

@section('content')
<div class="container-fluid">
    <h1>Data Class</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="my-3">
        <a href="/class_add" class="btn btn-primary btn-sm">Add Data</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 65%;">Class</th>
                    <th style="width: 30%;" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($class as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td class="text-center">
                        <a href="/class_detail/{{$data->id}}" class="btn btn-primary btn-sm">Detail</a>
                        <a href="/class_edit/{{$data->id}}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

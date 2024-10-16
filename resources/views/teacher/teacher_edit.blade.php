@extends('layout.template')
@section('title', 'Edit Teacher')

@section('content')
<div class="container-fluid">
        <h1>Form edit data Teacher</h1>
    <div class="mt-5 col-6 m-auto">
        <form action="/teacher/{{$teacher->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="control-group mb-3">
                <label for="name">Nama Guru</label>
                <input type="text" name="name" value="{{$teacher->name}}" class="form-control" id="name" placeholder="masukan nama anda..." required>
            </div>
            <div class="control-group mb-3">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
        
@endsection

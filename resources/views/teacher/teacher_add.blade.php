@extends('layout.template')
@section('title', 'Add new Teacher')

@section('content')
<div class="container-fluid">
        <h1>Form tambah data Teacher</h1>
       <div class="mt-5 col-6 m-auto">
        <form action="teacher" method="POST">
            @csrf
            <div class="control-group mb-3">
                <label for="teacher">Nama Teacherkurikuler</label>
                <input type="text" name="name" class="form-control" id="teacher" placeholder="Masukan nama teacher anda..." required>
            </div>
            <div class="control-group mb-3">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
       </div>
        
@endsection
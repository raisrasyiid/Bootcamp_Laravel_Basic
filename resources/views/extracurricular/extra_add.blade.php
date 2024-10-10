@extends('layout.template')
@section('title', 'Add new Extra')

@section('content')
<div class="container-fluid">
        <h1>Form tambah data extra</h1>
       <div class="mt-5 col-6 m-auto">
        <form action="extra" method="POST">
            @csrf
            <div class="control-group mb-3">
                <label for="extra">Nama Extrakurikuler</label>
                <input type="text" name="name" class="form-control" id="extra" placeholder="Masukan nama extrakurikuler..." required>
            </div>
            <div class="control-group mb-3">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
       </div>
        
@endsection
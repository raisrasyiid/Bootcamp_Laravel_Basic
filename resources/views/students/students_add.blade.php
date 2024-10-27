@extends('layout.template')
@section('title', 'Add new student')

@section('content')
<div class="container-fluid">
        <h1>Form tambah data student</h1>
       <div class="mt-5 col-6 m-auto">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="student" method="POST">
            @csrf
            <div class="control-group mb-3">
                <label for="name">name</label>
                <input type="text" name="fullname" class="form-control" id="name" placeholder="masukan nama anda...">
            </div>
            <div class="control-group mb-3">
                <label for="gender">gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="" >Select One</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="control-group mb-3">
                <label for="nis">nis</label>
                <input type="text" name="nis" class="form-control" id="nis" placeholder="masukan nis anda...">
            </div>
            <div class="control-group mb-3">
                <label for="class">class</label>
                <select name="class_id" id="class" class="form-control">
                    <option value="" >Select One</option>
                    @foreach ($class as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="control-group mb-3">
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
       </div>
        
@endsection

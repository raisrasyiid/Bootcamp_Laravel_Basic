@extends('layout.template')
@section('title', 'Add new Class')

@section('content')
<div class="container-fluid">
        <h1>Form tambah data class</h1>
       <div class="mt-5 col-6 m-auto">
        <form action="class" method="POST">
            @csrf
            <div class="control-group mb-3">
                <label for="name">nama kelas</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="masukan nama kelas anda..." required>
            </div>
            <div class="control-group mb-3">
                <label for="class">Teacher</label>
                <select name="teacher_id" id="teacher" class="form-control" required>
                    <option value="" >Select One</option>
                    @foreach ($teacher as $item)
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

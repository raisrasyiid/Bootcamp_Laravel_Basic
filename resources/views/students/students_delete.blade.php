@extends('layout.template')
@section('title', 'Students-delete')

@section('content')
<div class="container-fluid mt-5">
        <h2>Apakah kamu yakin akan menghapus data ini? {{$student->fullname}} ({{$student->nis}})</h2>
        <form style="display: inline-block" action="/student_destroy/{{$student->id}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>        
        </form>
        <a href="/students" class="btn btn-primary">Cancel</a>        
@endsection

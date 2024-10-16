@extends('layout.template')
@section('title', 'Edit Extra')

@section('content')
<div class="container-fluid">
    <h1>Form Edit Data Extra</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="mt-5 col-6 m-auto">
        <form action="/extra/{{$extra->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="control-group mb-3">
                <label for="name">Nama Extra</label>
                <input type="text" name="name" value="{{$extra->name}}" class="form-control" id="name" placeholder="Masukan nama extra...." required>
            </div>       
            <div class="control-group mb-3">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>    
</div>
@endsection

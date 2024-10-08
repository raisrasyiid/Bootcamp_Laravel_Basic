@extends('layout.template')
@section('title', 'Extra Detail')

@section('content')
<div class="container-fluid">
        <h1>Data Peserta Ekstrakurikuler {{$extra->name}}</h1>
        <table class="table table-bordered mt-5">
            <thead class="text-center">
                <tr>
                    {{-- <th>NO</th> --}}
                    <th>NIM</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($extra->students as $item)
                <tr>
                    <td>{{$item->nis}}</td>
                    <td>{{$item->fullname}}</td>
                @endforeach
                </tr>
                </tbody>
            </table>
            <br>
            <a href="/extra" class="btn btn-primary btn-sm">Back</a>
      </div>

     
@endsection

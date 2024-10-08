@extends('layout.template')
@section('title', 'Students_Detail')

@section('content')
<div class="container-fluid mt-2">
        <h4>Daftar siswa dengan nama guru : {{$teacher->name}}</h4>
        Kelas : {{$teacher->class->name}}
        <table class="table table-bordered mt-3">
            <thead class="text-center">
                <tr>
                    <th>NIS</th>
                    <th>Nama Lengkap</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teacher->class->students as $item)
                <tr>
                    <td>{{$item->nis}}</td>
                    <td>{{$item->fullname}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
            <br>
            <a href="/teacher" class="btn btn-primary btn-sm">Back</a>
      </div>

     
@endsection

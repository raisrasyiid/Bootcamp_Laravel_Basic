@extends('layout.template')
@section('title', 'Students_Detail')

@section('content')
<div class="container-fluid">
        <h1>Data Kelas {{$class->name}}</h1>
        <h5>Wali Kelas : {{$class->homeroomTeacher->name}}</h5>
        <table class="table table-bordered mt-4">
            <thead class="text-center">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">NIS</th>
                    <th class="text-center">Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($class->students as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nis}}</td>
                    <td>{{$item->fullname}}</td>
                </tr>
                @endforeach

                </tbody>
            </table>
            <br>
            <a href="/class" class="btn btn-primary btn-sm">Back</a>
      </div>

     
@endsection

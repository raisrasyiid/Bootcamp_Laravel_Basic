@extends('layout.template')
@section('title', 'Students_Detail')

@section('content')
<div class="container-fluid">
        <h1>Data Mahasiswa {{$student->fullname}}</h1>

        <div class="my-3 d-flex justify-content-center">
            @if ($student->image !=null)
            <img src="{{asset('storage/photo/students/'. $student->image)}}" alt="" width="100" height="100">
            @else
            <img src="{{asset('storage/default_image/profile.jpeg')}}" alt="" width="100" height="100">
            @endif          
        </div>

        <table class="table table-bordered mt-5">
            <thead class="text-center">
                <tr>
                    {{-- <th>NO</th> --}}
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Wali Kelas</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{$student->nis}}</td>
                        <td>{{$student->fullname}}</td>
                       
                        <td>
                            @if ($student->gender == 'L')
                            Laki-laki
                        @else
                            Perempuan
                        @endif
                        </td>
                        <td>{{$student->class->name}}</td>
                        <td>{{$student->class->homeroomTeacher->name}}</td>
                    </tr>
                </tbody>
            </table>

            <div class="container">
                <h4>Extrakurikuler</h4>
                <ol>
                    @if($student->extra->isEmpty())
                    Tidak mengikuti extrakurikuler
                @else
                    @foreach ($student->extra as $item)
                        <li>{{$item->name}}</li>
                    @endforeach
                @endif
                </ol>
            </div>
            <br>
            <a href="/students" class="btn btn-primary btn-sm">Back</a>
      </div>

     
@endsection

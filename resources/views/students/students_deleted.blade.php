@extends('layout.template')
@section('title', 'Students-deleted')

@section('content')
<div class="container-fluid mt-5">
      <h1>Ini halaman students yang sudah di hapus datanya</h1>
      <a href="/students" class=" mt-4 btn btn-primary">Cancel</a>       
    <div class="mt-3">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>Namaku</th>
                    <th>Jenis Kelamin</th>
                    <th>Restore</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($studentDelete as $data)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->nis}}</td>
                        <td>{{$data->fullname}}</td>
                        <td>{{$data->gender}}</td>
                        <td class="text-center">
                            <a href="students/{{{$data->id}}}/restore" class="btn btn-info btn-sm">Restore</a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        </table>
    </div>
         
@endsection

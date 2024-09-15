@extends('layout.template')
@section('title', 'Students')

@section('content')
<div class="container-fluid">
        <h1>Data Mahasiswa :  </h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Namaku</th>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td>{{$nama}}</td>
                </tr>
               
            </tbody>
        </table>
      </div>
@endsection

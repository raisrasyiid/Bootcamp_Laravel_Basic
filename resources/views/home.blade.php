@extends('layout.template')
@section('title', 'Home')
    
@section('content')
<div class="container-fluid">
    <h1>Selamat datang {{$name}}</h1>
    <h2>Role anda adalah {{$role}}</h2>

    {{-- @if ($role == 'admin')
        <p>selamat anda memiliki semua hak akses disini!</p>
        <a href="#">Ke halaman admin</a>
    @elseif($role == 'staff')
        <a href="#">ke halaman staff</a>
        @else
        <a href="#">ke halaman login</a>
    @endif --}}

    @switch($role)
        @case($role == 'admin')
          <a href="#">Ke halaman admin</a>
          @break
          @case($role == 'staff')
          <a href="#">Ke halaman staff</a>
          @break
          @default
          <a href="#">Ke halaman login</a>       
    @endswitch

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>no</th>
          <th>nama buah</th>
        </tr>
      </thead>
      @foreach ($buah as $data)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data}}</td>
      </tr>
      @endforeach
    </table>                     
  </div>    
@endsection

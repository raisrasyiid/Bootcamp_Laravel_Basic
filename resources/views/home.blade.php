@extends('layout.template')
@section('title', 'Home')
    
@section('content')
<div class="container-fluid">
    <h1>Selamat datang {{$name}}</h1>
    <h2>Role anda adalah {{$role}}</h2>
  </div>    
@endsection

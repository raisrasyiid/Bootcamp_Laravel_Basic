@extends('layout.template')
@section('title', 'Home')
    
@section('content')
<div class="container-fluid">
    <h1>Selamat datang {{Auth::user()->name}}</h1>
  <h2>Role anda adalah {{Auth::user()->role->name}}</h2>
  </div>    
@endsection

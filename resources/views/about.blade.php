@extends('layout.template')
@section('title', 'About')

@section('content')
<div class="container-fluid">
        <h1>Tentang saya :  </h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Data diri</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{$item}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
@endsection

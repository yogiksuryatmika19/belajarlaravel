@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h4>{{ $nama }}</h4>
    <h6>{{ $email }}</h6>
    <img src="img/{{ $gambar }}" alt="" width="200px">
@endsection



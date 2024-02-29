@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$task->name}}</h1><!-- Menampilkan judul tugas -->
    <p>{{$task->description}}</p> <!-- Menampilkan deskripsi tugas -->
    <a href="{{url('/task')}}">Back to Task</a> <!-- Link untuk kembali ke halaman indeks tugas -->
</div>

@endsection
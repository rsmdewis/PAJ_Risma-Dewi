
@extends('layouts.app')

@section('content')
<div>
    <h1>Task List</h1><!-- Menampilkan judul daftar task -->
    @foreach($tasks as $task)
    <div class="task-item"> <!-- Mengulang setiap task -->
        <strong>Name : {{ $task->name }}</strong> <!-- Menampilkan nama task -->
        <p>Description : {{ $task->description }}</p> <!-- Menampilkan deskripsi task -->
        <a href="{{url("/task/{$task->id}")}}" class="view-link">View</a> <!-- Link untuk melihat detail task -->
        <a href="{{url('task/' . $task->id . '/edit')}}" class="edit-link">Edit</a> <!-- Link untuk mengedit task -->
        <form action="{{url('/task' ,[$task->id])}}" method="POST" class="delete-form"> <!-- Form untuk menghapus task -->
            @method('delete') <!-- Menggunakan metode DELETE -->
            @csrf <!-- Token CSRF untuk keamanan -->
            <button type="submit" class="btn btn-danger">Hapus</button> <!-- Tombol untuk menghapus task -->
        </form>
    </div>
    @endforeach
</div>

@endsection


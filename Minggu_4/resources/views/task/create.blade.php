@extends('layouts.app')

@section('content')
<!-- Membuka kelas container -->
<div class="container">
    <!-- Menampilkan judul "Create New Tasks" -->
    <h1>
        Create New Tasks
    </h1>
    <!-- Membuka sebuah form dengan metode POST yang akan mengirim data 
    ke route dengan nama 'task.store' saat form ini disubmit. -->
    <form method="POST" action="{{ route('task.store') }}">
        @csrf  <!-- melindungi aplikasi dari serangan lintas situs (CSRF) -->
        <!-- Menampilkan label "Name" untuk input field -->
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <!-- Menampilkan label "Description" untuk input field -->
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <br>
        <!-- Menampilkan sebuah tombol submit -->
        <button type="submit">Create Task</button>
    </form>
    <!-- enampilkan sebuah tautan untuk kembali ke halaman /task -->
    <a href="{{url('/task')}}">Back to Task</a>

</div>

@endsection


    <!-- <form action="">
        <label for="name">Name</label>
        <input type="text" name="name" id="">
        <br>
        <label for="description">Description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <br>
        <button type="submit"> Create Task</button>
    </form> -->
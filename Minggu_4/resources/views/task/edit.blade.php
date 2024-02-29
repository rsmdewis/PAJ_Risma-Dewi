@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Task</h2>
        
        <form action="{{url("/task/{$tasks->id}") }}" method="POST"><!-- Form untuk mengirimkan pembaruan tugas -->
            @csrf <!-- Token CSRF untuk keamanan -->
            @method('PUT') <!-- Menggunakan metode PUT untuk pembaruan -->
            <div class="form-group">
                <label for="name">Name</label>
                <!-- Input untuk nama tugas -->
                <input type="text" class="form-control" id="name" name="name" value="{{ $tasks->name }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <!-- Input untuk deskripsi tugas -->
                <input type="text" class="form-control" id="description" name="description" value="{{ $tasks->description }}">
            </div>
            <!-- Tombol untuk menyampaikan pembaruan -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
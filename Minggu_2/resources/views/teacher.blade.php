<!-- resources/views/teacher.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers</title> <!-- Judul halaman -->

</head>
<body>
<h1>Teacher List</h1> <!-- Judul untuk daftar teacher -->
    <!-- Tabel untuk menampilkan data teacher --> 
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th> <!-- Header kolom nama teacher --> 
                <th>Email</th> <!-- Header kolom email teacher -->
                <th>Alamat</th> <!-- Header kolom alamat teacher -->
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->name }}</td> <!-- Menampilkan nama teacher dari database-->
                    <td>{{ $teacher->email }}</td> <!-- Menampilkan email teacher dari database-->
                    <td>{{ $teacher->address }}</td> <!-- Menampilkan alamat teacher dari database-->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</body>
</html>
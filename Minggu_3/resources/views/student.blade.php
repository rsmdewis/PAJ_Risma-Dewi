<!-- resources/views/student.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title> <!-- Judul halaman -->

</head>
<body>
    <h1>Student List</h1> <!-- Judul untuk daftar student -->
    <!-- Tabel untuk menampilkan data student --> 
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th> <!-- Header kolom nama student -->
                <th>Email</th> <!-- Header kolom email student -->
                <th>Alamat</th> <!-- Header kolom alamat student -->
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td> <!-- Menampilkan nama student dari database-->
                    <td>{{ $student->email }}</td> <!-- Menampilkan email student dari database-->
                    <td>{{ $student->address }}</td> <!-- Menampilkan alamat student dari database-->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
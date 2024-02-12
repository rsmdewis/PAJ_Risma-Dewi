<!-- resources/views/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admins</title> <!-- Judul halaman -->

</head>
<body>
    <h1>Admin List</h1> <!-- Judul untuk daftar Admin -->
    <!-- Tabel untuk menampilkan data admin -->    
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th> <!-- Header kolom nama admin -->
                <th>Email</th> <!-- Header kolom email admin-->
                <th>Alamat</th> <!-- Header kolom alamat admin-->
            </tr>
        </thead>
        <tbody>
            @foreach($admins as $admin)
                <tr>
                    <td>{{ $admin->name }}</td> <!-- Menampilkan nama admin dari database-->
                    <td>{{ $admin->email }}</td> <!-- Menampilkan email admin dari database-->
                    <td>{{ $admin->address }}</td> <!-- Menampilkan alamat admin dari database-->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
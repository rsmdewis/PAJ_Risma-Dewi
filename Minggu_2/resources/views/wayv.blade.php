<!-- resources/views/wayv.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WayVs</title> <!-- Judul halaman -->

</head>
<body>
<h1>WayVList</h1> <!-- Judul untuk daftar wayv -->
    <!-- Tabel untuk menampilkan data wayv --> 
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th> <!-- Header kolom nama wayv -->
                <th>Emotikon</th> <!-- Header kolom ayang wayv -->
                <th>Alamat</th> <!-- Header kolom alamat wayv -->
            </tr>
        </thead>
        <tbody>
            @foreach($way_v_s as $way_v)
                <tr>
                    <td>{{ $way_v->name }}</td> <!-- Menampilkan nama wayv dari database-->
                    <td>{{ $way_v->ayang }}</td> <!-- Menampilkan ayang wayv dari database-->
                    <td>{{ $way_v->address }}</td> <!-- Menampilkan alamat wayv dari database-->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
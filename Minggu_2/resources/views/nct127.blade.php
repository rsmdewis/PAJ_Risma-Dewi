<!-- resources/views/nct127.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nct127s</title> <!-- Judul halaman -->

</head>
<body>
    <h1>NCT 127 List</h1> <!-- Judul untuk daftar NCT 127 -->

    <!-- Tabel untuk menampilkan data NCT 127 -->  
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th> <!-- Header kolom nama NCT 127 -->
                <th>Emotikon</th> <!-- Header kolom Ayang NCT 127 -->
                <th>Alamat</th> <!-- Header kolom Alamat NCT 127 -->
            </tr>
        </thead>
        <tbody>
            @foreach($nct127s as $nct127)
                <tr>
                    <td>{{ $nct127->name }}</td> <!-- Menampilkan nama NCT 127 dari database-->
                    <td>{{ $nct127->ayang }}</td> <!-- Menampilkan ayang NCT 127 dari database-->
                    <td>{{ $nct127->address }}</td> <!-- Menampilkan alamat NCT 127 dari database-->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
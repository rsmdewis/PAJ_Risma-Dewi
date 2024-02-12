<!-- resources/views/nctdream.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NctDreams</title> <!-- Judul halaman -->

</head>
<body>
<h1>NCT Dream List</h1> <!-- Judul untuk daftar NCT Dream -->
    <!-- Tabel untuk menampilkan data NCT Dream --> 
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th> <!-- Header kolom nama NCT Dream -->
                <th>Emotikon</th> <!-- Header kolom ayang NCT Dream -->
                <th>Alamat</th> <!-- Header kolom alamat NCT Dream -->
            </tr>
        </thead>
        <tbody>
            @foreach($nctdreams as $nctdream)
                <tr>
                    <td>{{ $nctdream->name }}</td> <!-- Menampilkan nama NCT Dream dari database-->
                    <td>{{ $nctdream->ayang }}</td> <!-- Menampilkan ayang NCT Dream dari database-->
                    <td>{{ $nctdream->address }}</td> <!-- Menampilkan alamat NCT Dream dari database-->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
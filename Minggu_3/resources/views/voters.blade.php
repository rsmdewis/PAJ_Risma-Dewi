<!-- resources/views/student.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter</title> <!-- Judul halaman -->

</head>
<body>
    <table border="1">
        @foreach($voter as $vote)
            <tr>
                <td>{{ $vote->name }}</td> <!-- Menampilkan nama student dari database-->
                <td>{{ $vote->email }}</td> <!-- Menampilkan email student dari database-->
                <td>{{ $vote->address }}</td> <!-- Menampilkan alamat student dari database-->
            </tr>
        @endforeach
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- mendefinisikan metadata dan tautan ke file CSS eksternal -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Task App</title>
</head>
<body>
    <header>
        <!-- membuat navigasi dengan dua tautan menu -->
        <nav>
            <ul>
                <!-- membuat menu home dan create Task beserta tautannya -->
                <li><a href="{{url('/task')}}">Home</a></li> 
                <li><a href="{{url('/task/create')}}">Create Task</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <!-- untuk memasukkan konten spesifik untuk halaman -->
            @yield('content')
        </div>
    </main>
    <footer>
        <!-- menampilkan hak cipta dan tahun saat ini -->
        <!-- <p>&copy; {{date('Y')}} Task App</p> -->
    </footer>
</body>
</html>




<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi CRUD Siswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
<style>
    .sidebar {
    width: 300px;
    background-color: #03001d;
    position: fixed;
    height: 100%;
    overflow: auto;
    padding-top: 20px;
    color: #000b30;
    text-align: center;
}

.sidebar a {
    padding: 10px;
    text-decoration: none;
    font-size: 20px;
    color: rgb(122, 134, 243);    
    display: block;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.sidebar a:hover {
    background-color: #1a6481;
}

/* Gaya CSS untuk konten utama */
.content {
    margin-left: 330px;
    padding: 20px;
    text-align: center;
}
.judul{
    font-size: 30px;
    color: white;
    margin-bottom: 50px;
    margin-top: 10px;
}
.judul2{
    margin-left: 45px;
    text-align: left;
}
.judul2 h1{
    font-size: 30px;
    margin-top: 10px;
}
.btn.btn-success{
   background: #000b30; ;
}
.btn.btn-info{
    background: #1a6481;
}
.btn.btn-warning{
    background: #1a6481;
}
.btn.btn-danger{
    background: #1a6481;
    color: #000b30;
}
.container{
    text-align: left;
}
.container h1{
    margin-top: 10px;
    font-size: 32px;
}
.content2{
    text-align: left;
}
.content2 h1{
    font-size: 32px;
    margin-top: 10px;
}

</style>

</head>
<body>
    <div class="sidebar">
        <h1 class="judul">Dashboard</h1>
        <a href="{{ route('siswa') }}">Daftar Siswa</a>
        <a href="{{ route('siswacreate') }}">Tambah Siswa</a>
    </div>

    <div class="content">
        <!-- Konten utama akan ditampilkan di sini -->
        @yield('content')
    </div>

    <footer>
        <!-- Tambahkan footer atau elemen footer lainnya di sini -->
    </footer>
    
</body>
</html>

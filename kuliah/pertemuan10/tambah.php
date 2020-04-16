<?php 
require 'functions.php';


if(isset($_POST['tambah'])){
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data mahasiswa</title>
</head>
<body>
    <h3>Tambah Data Mahasiswa</h3>

    <form action="" method="POST">
    <ul>
        <li>
        <label>
        Nama:
            <input type="text" name="nama" autofocus>
        </label>
        </li>
        <li>
        <label>
            Nrp:
            <input type="text" name="nrp">
        </label>
        </li>
        <li>
        <label>
            E-mail:
            <input type="text" name="email">
        </label>
        </li>
        <li>
        <label>
            Jurusan:
            <input type="text" name="jurusan">
        </label>
        </li>
        <li>
        <label>
            gambar:
            <input type="text" name="gambar">
        </label>
        </li>
        <li>
        <button type="submit" name ="tambah">tambah data</button>
        </li>
    </ul>
    </form>
</body>
</html>
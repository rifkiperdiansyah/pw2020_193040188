<?php 
require 'functions.php';

$id  = $_GET['id'];

$m = query ("SELECT * FROM mahasiswa WHERE id = $id")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Detail mahasiswa</h3>

    <ul>
        <li><img src="img/<?= $m['gambar']; ?>" alt=""></li>
        <li><?= $m['nrp']; ?></li>
        <li><?= $m['nama']; ?></li>
        <li><?= $m['email']; ?></li>
        <li><?= $m['jurusan']; ?></li>
<li><a href="">Ubah</a>|<a href="">Hapus</a></li>
<li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
    </ul>
</body>
</html>
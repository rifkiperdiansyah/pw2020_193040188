<?php


if(!isset ($_GET['id'])){
    header ("location: ../index.php");
    exit;
}

require 'functions.php ';

$id = $_GET ['id'];

$mahasiswa = query ("SELECT *FROM mahasiswa WHERE id = $id" );
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
        <li><img src="img/<?= $mahasiswa ['gambar']; ?>" alt=""></li>
        <li><?= $mahasiswa ['nrp']; ?></li>
        <li><?= $mahasiswa ['nama']; ?></li>
        <li><?= $mahasiswa ['email']; ?></li>
        <li><?= $mahasiswa ['jurusan']; ?></li>
<li><a href="">Ubah</a>|<a href="">Hapus</a></li>
<li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
    </ul>
</body>
</html>
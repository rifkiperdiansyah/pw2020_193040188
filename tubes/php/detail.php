<?php


if(!isset ($_GET['id'])){
    header ("location: ../index.php");
    exit;
}

require 'functions.php ';

$id = $_GET ['id'];

$judul_buku = query ("SELECT *FROM buku WHERE id = $id" )[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
    <link rel="stylesheet" href="../css/css/detail.css">

</head>
<body>
    <div class="container">
    <img src="../asset/img/<?= $judul_buku['cover_buku']; ?>" alt="">
   

    <div class="keterangan">
        <ul>

    <p>Judul Buku :<?= $judul_buku['Judul_Buku']; ?></p>
    <p>Penulis :<?= $judul_buku['Penulis']; ?></p>
    <p>Penerbit :<?= $judul_buku['Penerbit']; ?></p>
    <p>Tebal Halaman :<?= $judul_buku['Tebal_buku']; ?></p>
    </ul>
    </div>
    
    <button class="kembali"><a href=" ../index.php">back</a> </button>
    </div>
</body>
</html>
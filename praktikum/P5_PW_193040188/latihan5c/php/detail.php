<?php 
if(!isset ($_GET['id'])){
    header ("location: ../index.php");
    exit;
}

require 'functions.php ';

$id = $_GET ['id'];

$judul_buku = query ("SELECT *FROM judul_buku WHERE id = $id" )[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
    <div class="container">
    <img src="../asset/img/<?= $judul_buku['cover_buku']; ?>" alt="">
    </div>

    <div class="keterangan">

    <p><?= $judul_buku['Judul_buku']; ?></p>
    <p><?= $judul_buku['Penulis']; ?></p>
    <p><?= $judul_buku['Penerbit']; ?></p>
    <p><?= $judul_buku['Tebal_buku']; ?></p>
  
    </div>

    <button class="kembali"><a href=" ../index.php">back</a> </button>
</body>
</html>
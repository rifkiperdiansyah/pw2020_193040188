<?php 
if(!isset($_SESSION["username"])){
    header("location: login.php");
    exit;
}

require 'functions.php';
if (isset ($_GET['cari'])){
    $keyword = $_GET['keyword'];
    $buku = query("SELECT * FROM judul_buku WHERE
            Judul_buku LIKE '%$keyword%'OR
            Penulis LIKE '%$keyword%'OR
            Penerbit LIKE '%$keyword%'OR
            Tebal_buku LIKE '%$keyword%' ");
}else{
    $judul_buku = query("SELECT *FROM judul_buku");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Judul_buku</title>
</head>
<body>
    <h3>Judul buku</h3>

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">cari</button>
    </form>
    

    <div class="add"><a href="tambah.php"> tambah data</a> </div>
<div class="conrainer">
    <table border= "1" cellpadding="10"cellspacing="0">

    <tr>
        <th>#</th>
        <th>opsi</th>
        <th>Cover buku</th>
        <th>Judul_buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tebal_buku</th>
       

    </tr>
    <?php $i = 1 ; ?>
    <?php foreach ($judul_buku as $b): ?>
    <tr>
        <td><?= $i ?></td>
        <td> 
            <a href="ubah.php?id=<?= $b['ID']?>">Ubah</a>
            <a href="hapus.php?id=<? $b['ID']?>"onclick="return confirm ('hapus data??')">Hapus</a>
        </td>
        <td><img src="../asset/img/<?php echo $b['cover_buku'];?>" alt=""></td>
        <td><?php echo $b['Judul_buku'];?></td>
        <td><?php echo $b['Penulis'];?></td>
        <td><?php echo $b['Penerbit'];?></td>
        <td><?php echo $b['Tebal_buku'];?></td>
    </tr>
    <?php  $i++ ?>
    <?php endforeach; ?>
    </table>
    </div>

    <div class="logout">
        <a href="logout.php">logout</a>
    </div>
</body>
</html>
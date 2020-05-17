<?php 
session_start();
if(!isset($_SESSION["username"])){
    header("location: login.php");
    exit;
}

require 'functions.php';


if (isset ($_GET['cari'])){
    $keyword = $_GET['keyword'];
    $buku = query("SELECT * FROM buku WHERE
            Judul_Buku LIKE '%$keyword%'OR
            Penulis LIKE '%$keyword%'OR
            Penerbit LIKE '%$keyword%'OR
            Tebal_buku LIKE '%$keyword%' ");
}else{
    $buku = query("SELECT *FROM buku");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>


    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <h1>Halamah Admin</h1>
    <hr>
    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
     <button type="submit" name="cari">cari</button>
     
    </form>
    

    <div class="add"><a href="tambah.php"> tambah data</a> </div>
<div class="container">
    <table border= "1" cellpadding="10"cellspacing="1">

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
    <?php foreach ($buku as $b): ?>
    <tr>
        <td><?= $i ?></td>
        <td> 
            <a class="ubah" href="ubah.php?id=<?= $b['id']?>">Ubah</a>
            <a class="hapus" href="hapus.php?id=<?= $b['id']?>"onclick="return confirm ('hapus data??')">Hapus</a>
        </td>
        <td><img src="../asset/img/<?php echo $b['cover_buku'];?>" alt=""></td>
        <td><?php echo $b['Judul_Buku'];?></td>
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
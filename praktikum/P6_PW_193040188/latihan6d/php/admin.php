<?php 
require 'functions.php';


$buku = query("SELECT *FROM buku");
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
    <?php foreach ($buku as $b): ?>
    <tr>
        <td><?= $i ?></td>
        <td> 
            <a href="">Ubah</a>
            <a href="hapus.php?id=<? $buku['id']?>"onclick="return confirm ('hapus data??')">Hapus</a>
        </td>
        <td><img src="asset/img/<?php echo $b['cover_buku'];?>" alt=""></td>
        <td><?php echo $b['Judul_buku'];?></td>
        <td><?php echo $b['Penulis'];?></td>
        <td><?php echo $b['Penerbit'];?></td>
        <td><?php echo $b['Tebal_buku'];?></td>
    </tr>
    <?php  $i++ ?>
    <?php endforeach; ?>
    </table>
    </div>
</body>
</html>
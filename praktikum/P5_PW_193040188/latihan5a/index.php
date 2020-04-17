<?php 
// conect ke database 
$conn = mysqli_connect('localhost','root','','buku');


// query table

$result = mysqli_query($conn,"SELECT *FROM judul_buku");


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h3>daftar mahasiswa</h3>

<div class="conrainer">
    <table border= "1" cellpadding="10"cellspacing="0">

    <tr>
        <th>#</th>
        <th>Cover buku</th>
        <th>Judul_buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tebal_buku</th>
       

    </tr>
    <?php $i = 1 ; ?>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $i ?></td>
        <td><img src="asset/img/<?php echo $row['cover_buku'];?>" alt=""></td>
        <td><?php echo $row['Judul_buku'];?></td>
        <td><?php echo $row['Penulis'];?></td>
        <td><?php echo $row['Penerbit'];?></td>
        <td><?php echo $row['Tebal_buku'];?></td>
    </tr>
    <?php  $i++ ?>
    <?php endwhile; ?>
    </table>
    </div>
</body>
</html>
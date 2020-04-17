<?php 
// conect ke database 
$conn = mysqli_connect('localhost','root','','buku');


// query table

$result = mysqli_query($conn,"SELECT *FROM judul_buku");

// ubah
$rows =[];
while ($row = mysqli_fetch_assoc ($result)){
      $rows[]=$row;
}

$judul = $rows

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


    <table border= "1" cellpadding="10"cellspacing="0">

    <tr>
        <th>#</th>
        <th>Cover buku</th>
        <th>Judul_buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tebal_buku</th>
       

    </tr>
    <?php $i = 1 ;
    foreach ($judul as $j): ?>
    <tr>
        <td><?= $i++; ?></td>
        <td><img src="asset/img/<?php echo $j['cover_buku'];?>" alt=""></td>
        <td><?php echo $j['Judul_buku'];?></td>
        <td><?php echo $j['Penulis'];?></td>
        <td><?php echo $j['Penerbit'];?></td>
        <td><?php echo $j['Tebal_buku'];?></td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>
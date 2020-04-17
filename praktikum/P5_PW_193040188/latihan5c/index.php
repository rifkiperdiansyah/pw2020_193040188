
<?php 

require 'php/functions.php'; 
$judul = query("SELECT * FROM Judul_buku");

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
    <h3>Judul Buku</h3>


    <table border= "1" cellpadding="10"cellspacing="0">

    <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>nama </th>
       

    </tr>
    <?php $i = 1 ;
    foreach ($judul as $j): ?>
    <tr>
        <td><?= $i++; ?></td>
        <td><img src="asset/img/<?php echo $j['cover_buku'];?>" alt=""></td>
        <td><?php echo $j['Judul_buku'];?></td>
       
        
        
        <td>
            <a href="php/detail.php ?id=<?= $j['id']; ?> ">lihat detail</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>
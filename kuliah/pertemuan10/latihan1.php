<?php 
// conect ke database 
$conn = mysqli_connect('localhost','root','','phpdasar');


// query table

$result = mysqli_query($conn,"SELECT *FROM mahasiswa");

// ubah
$rows =[];
while ($row = mysqli_fetch_assoc ($result)){
      $rows[]=$row;
}

$mahasiswa = $rows

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
        <th>Gambar</th>
        <th>NRP</th>
        <th>nama </th>
        <th>Email</th>
        <th>jurusan</th>
        <th>aksi</th>

    </tr>
    <?php $i = 1 ;
    foreach ($mahasiswa as $m): ?>
    <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?php echo $m['gambar'];?>" alt=""></td>
        <td><?php echo $m['nama'];?></td>
        <td><?php echo $m['nrp'];?></td>
        <td><?php echo $m['email'];?></td>
        <td><?php echo $m['jurusan'];?></td>
        <td>
            <a href="">ubah</a>|<a href="">hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>
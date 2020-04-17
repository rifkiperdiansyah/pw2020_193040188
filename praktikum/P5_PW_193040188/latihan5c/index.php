<?php 

require 'php/functions.php';
// conect ke database 



// query table

$judul_buku = query("SELECT *FROM judul_buku");


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
    <h3>JUDUL BUKU</h3>

<div class="conrainer">
    <table border= "1" cellpadding="10"cellspacing="0">

   
       

    </tr>
    <div class="container">
    <?php foreach ($judul_buku as $j): ?>
    <p class="nama">
       <a href="php/detail.php ?id=<?= $j['ID']?>">
       <?= $j['Judul_buku']?>
       </a>
    </p>
    
   
    <?php endforeach; ?>
    </div>
    </table>
    </div>
</body>
</html>
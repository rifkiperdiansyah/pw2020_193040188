<?php 

session_start();
if(!isset($_SESSION["username"])){
    header("location: login.php");
    exit;
}

require 'functions.php';


$id = $_GET['id'];


$buku= query("SELECT* FROM buku WHERE id = $id")[0];


if(isset($_POST['ubah'])){
    if( ubah ($_POST)>0){
        echo "<script>
        alert('data berhasil Ubah');
        document.location.href='admin.php';
        </script>";
    }
    else{
        echo "<script>
        alert('data gagal di Ubah');
        document.location.href='admin.php';</script>";
    }
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
    <link rel="stylesheet" href="../css/ubah.css">
</head>
<body>
    
<form action="" method="POST">
<h1>Ubah data</h1>
    <input type="hidden" name="id" id="id" value="<?= $buku['id'];?>">
    <ul>

    <li class="cover">
        <label for="cover_buku">cover :</label>
        <input type="text" name="cover_buku" id="cover_buku" required value ="<?= $buku['cover_buku']; ?>" ><br><br>
    </li>
    <li class="judul">
        <label for="Judul_Buku">Judul :</label>
        <input type="text" name="Judul_Buku" id="Judul_Buku" required value="<?= $buku['Judul_Buku']; ?>"><br><br>
    </li>
    <li class="penulis">
        <label for="Penulis"> Penulis :</label>
        <input type="text" name="Penulis" id="Penulis" required value="<?= $buku['Penulis']; ?>"><br><br>
    </li>
    <li class="penerbit">
        <label for="Penerbit">Penerbit :</label>
        <input type="text" name="Penerbit" id="Penerbit" required value="<?= $buku['Penerbit']; ?>"><br><br>
    </li>
    <li class="tebal">
        <label for="Tebal_buku">Tebal :</label>
        <input type="text" name="Tebal_buku" id="Tebal_buku" required value="<?= $buku['Tebal_buku']; ?>"><br><br>
    </li>

    <button type="submit" name="ubah">Ubah data</button>
   <button type="submit">
       <a href="admin.php" style="text-decoration:none;color: black;">Kembali</a>
   </button>
   </ul>
</form>
</body>
</html>
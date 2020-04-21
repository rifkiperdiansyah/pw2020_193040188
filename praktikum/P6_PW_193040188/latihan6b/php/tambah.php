<?php 
require 'functions.php';

if(isset($_POST['tambah'])){
    if(tambah($_POST)>0){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href='admin.php'</script>";
    }
    else{
        echo "<script>
        alert('data gagal di tambahkan');
        document.location.href='admin.php'</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
</head>
<body>
    <h3>tambah data</h3>
<form action="" method="POST">
    <ul>

    <li>
        <label for="gambar"></label>
        <input type="text" name="gambar" id="gambar" required ><br><br>
    </li>
    <li>
        <label for="Judul_buku"></label>
        <input type="text" name="Judul_buku" id="Judul_buku" required ><br><br>
    </li>
    <li>
        <label for="Penulis"></label>
        <input type="text" name="Penulis" id="Penulis" required ><br><br>
    </li>
    <li>
        <label for="Penerbit"></label>
        <input type="text" name="Penerbit" id="Penerbit" required ><br><br>
    </li>
    <li>
        <label for="Tebal_buku"></label>
        <input type="text" name="Tebal_buku" id="Tebal_buku" required ><br><br>
    </li>

    <button type="submit" name="tambah">Tambah data</button>
   <button type="submit">
       <a href="index.php" style="text-decoration:none;color: black;">Kembali</a>
   </button>
   </ul>
</form>
</body>
</html>
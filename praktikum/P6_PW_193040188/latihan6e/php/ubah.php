<?php 
require 'functions.php';


$id = $_GET['id'];
$buku = query("SELECT* FROM buku id = $id")[0];
if(isset($_POST['ubah'])){
    if( ubah ($_POST)>0){
        echo "<script>
        alert('data berhasil Ubah');
        document.location.href='admin.php'</script>";
    }
    else{
        echo "<script>
        alert('data gagal di Ubah');
        document.location.href='admin.php'</script>";
    }
}
?>


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
        <input type="text" name="gambar" id="gambar" required value ="<?= $buku['gambar']; ?>" ><br><br>
    </li>
    <li>
        <label for="Judul_buku"></label>
        <input type="text" name="Judul_buku" id="Judul_buku" required value="<?= $buku['Judul_buku']; ?>"><br><br>
    </li>
    <li>
        <label for="Penulis"></label>
        <input type="text" name="Penulis" id="Penulis" required value="<?= $buku['Penulis']; ?>"><br><br>
    </li>
    <li>
        <label for="Penerbit"></label>
        <input type="text" name="Penerbit" id="Penerbit" required value="<?= $buku['Penerbit']; ?>"><br><br>
    </li>
    <li>
        <label for="Tebal_buku"></label>
        <input type="text" name="Tebal_buku" id="Tebal_buku" required value="<?= $buku['Tebal_buku']; ?>"><br><br>
    </li>

    <button type="submit" name="ubah">Ubah data</button>
   <button type="submit">
       <a href="index.php" style="text-decoration:none;color: black;">Kembali</a>
   </button>
   </ul>
</form>
</body>
</html>
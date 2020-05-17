<?php 
session_start();

if(!isset($_SESSION["username"])){
    header("location: login.php");
    exit;
}
require 'functions.php';

if (isset($_POST['tambah'])){
   
if(tambah($_POST) > 0){
    echo " <script>
            alert('data berhasil ditambahkan ');
            document.location.href = 'admin.php';
            </script> ";
}else{
    echo " <script>
    alert('data gagal ditambahkan ');
    document.location.href = 'admin.php';
    </script> ";
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

    <link rel="stylesheet" href="../css/tambah.css">
</head>
<body>
   
<form action="" method="post">
<h1>tambah data</h1>   


    <div class="cover">
        <label for="cover_buku">Cover : <br> </label>
        <input type="text" name="cover_buku" id="cover_buku" required ><br><br>
  </div>
    
    <div>
        <label for="Judul_Buku">Judul : <br></label>
        <input type="text" name="Judul_Buku" id="Judul_Buku" required ><br><br>
    </div>
    <div>
        <label for="Penulis">Penulis : <br>   </label>
        <input type="text" name="Penulis" id="Penulis" required ><br><br>
    </div>
    <div>
        <label for="Penerbit">Penerbit : <br></label>
        <input type="text" name="Penerbit" id="Penerbit" required ><br><br>
    </div>
    <div>
        <label for="Tebal_buku">Tebal_buku : <br></label>
        <input type="text" name="Tebal_buku" id="Tebal_buku" required ><br><br>
    </div>
<br><br>
    <button type="submit" name="tambah">Tambah data </button>
   <button type="submit">
       <a href="admin.php" style="text-decoration:none;color: black;">Kembali</a>
   </button>
  
</form>
</body>
</html>
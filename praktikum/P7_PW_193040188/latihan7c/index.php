<?php 

require 'php/functions.php';
// conect ke database 



// query table

$buku= query("SELECT *FROM buku");
if (isset ($_GET['search'])){
    $keyword = $_GET['keyword'];
    $buku = query("SELECT * FROM buku WHERE
            Judul_Buku LIKE '%$keyword%'OR
            Penulis LIKE '%$keyword%'OR
            Penerbit LIKE '%$keyword%'OR
            Tebal_buku LIKE '%$keyword%' ");
}else{
    $buku = query("SELECT *FROM buku");
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">


    <title>Daftar buku</title>
</head>
<body>


<nav class="navbar navbar-expand-lg " id="navbar">
  <a class="navbar-brand" href="#">JUDUL BUKU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword" autofocus>
    <button class="btn btn-danger my-2 my-sm-0" type="submit" name="search">Search</button>
  </form>
  </div>
  <a class="admin" href="php/login.php"><button class="btn btn-outline-light my-2 my-sm-0"> masuk ke halaman admin</button></a>
</nav>


<!-- ========================== -->

<?php foreach ($buku as $j): ?> 

    <div class="card">
        <div class="card-body">
            <img src="asset/img/<?= $j['cover_buku'] ?>" ><br><br>
            <p class="judul">   <?= $j['Judul_Buku']?>  </p>
            <a href="php/detail.php ?id=<?= $j['id']?>" class="bt"><button> lihat detail</button></a>
        </div>
    </div>

<?php endforeach; ?>


  <!-- ========================== -->

   


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
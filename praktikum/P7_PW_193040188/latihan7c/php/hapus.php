<?php 
if(!isset($_SESSION["username"])){
    header("location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET ['id'];
if (hapus($id) > 0){
    echo "<script>
    alert.('data berhasil di hapus');
    document.location.href = 'admin.php';
    </scipt>";
}else{
    echo "<script>
    alert.('data gagal di hapus');
    document.location.href = 'admin.php';
    </scipt>";
}
?>
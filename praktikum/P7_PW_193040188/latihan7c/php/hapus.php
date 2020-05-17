<?php 
session_start();    
if(!isset($_SESSION["username"])){
    header("location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET ["id"];

if (hapus($id) > 0){
    $conn = koneksi();
    echo " <script>
    alert('data berhasil di hapus ');
    document.location.href = 'admin.php';
    </script> ";
    }else{
    echo " <script>
    alert('data gagal dihapus ');
    document.location.href = 'admin.php';
    </script> ";
    }

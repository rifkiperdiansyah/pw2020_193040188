<?php 
function koneksi()
{
$conn =  mysqli_connect('localhost','root','',)or die ("koneksi ke Db gagal");
mysqli_select_db($conn, "buku") or die ("database salah");
 
return $conn;


}
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn,"$sql");
    
    $rows =[];  
while ($row = mysqli_fetch_assoc ($result)){
      $rows[]=$row;
}
return $rows;
}
?>
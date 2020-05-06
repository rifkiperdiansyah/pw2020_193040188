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
while ($row = mysqli_fetch_assoc ($result )){
      $rows[]=$row;
}
return $rows;
}

function tambah($data){
  
    $conn = koneksi();
  
  $cover_buku = htmlspecialchars( $data['cover_buku']);
  $Judul_buku = htmlspecialchars( $data['Judul_buku']);
  $Penulis = htmlspecialchars( $data['Penulis']);
  $Penerbit = htmlspecialchars( $data['Penerbit']);
  $Tebal_buku = htmlspecialchars( $data['Tebal_buku']);
    $query ="INSERT INTO
              judul_buku
              VALUES
              ('','$cover_buku','$Judul_buku','$Penulis','$Penerbit','$Tebal_buku')
              ";
      mysqli_query($conn,$query);
  
      echo mysqli_error($conn);
      return mysqli_affected_rows($conn);
  }
  function hapus ($id){
    $conn = koneksi();

    mysqli_query($conn,"DELETE FROM judul_buku WHERE id = $id");

    return mysqli_affected_rows($conn);
  }

function ubah($data){
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $cover_buku = htmlspecialchars($data['cover_buku']);
  $Judul_buku= htmlspecialchars($data['Judul_buku']);
  $Penulis = htmlspecialchars($data['Penulis']);
  $Penerbit = htmlspecialchars($data['Penerbit']);
  $Tebal_buku = htmlspecialchars($data['Tebal_buku']);
  

  $query = "UPDATE judul_buku2 
              SET
        
              cover_buku = '$cover_buku',
              Judul_buku = '$Judul_buku',
              Penulis = '$Penulis',
              Pernerbit = '$Penerbit',
              Tebal_buku = '$Tebal_buku',
              WHERE ID =  '$id'";

      mysqli_query($conn,$query);

      return mysqli_affected_rows($conn); 
}

?>
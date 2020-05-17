<?php 
function koneksi()
{
$conn =  mysqli_connect('localhost','root','',)or die ("koneksi ke Db gagal");
mysqli_select_db($conn, "tubes_193040188") or die ("database salah");
 
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
$Judul_Buku = htmlspecialchars($data['Judul_Buku']);
$Penulis = htmlspecialchars($data['Penulis']);
$Penerbit = htmlspecialchars($data['Penerbit']);
$Tebal_buku = htmlspecialchars($data['Tebal_buku']);
  $query ="INSERT INTO
            buku
            VALUES
            ('','$cover_buku','$Judul_Buku','$Penulis','$Penerbit','$Tebal_buku')";
    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);

}
  
   

  
     
  


  function hapus ($id)
  {
    $conn = koneksi();

    mysqli_query($conn,"DELETE FROM buku WHERE id = $id");

    return mysqli_affected_rows($conn);
  }




  
function ubah($data){
  $conn = koneksi();




$id = $data['id'];
$cover_buku = htmlspecialchars( $data["cover_buku"]);
$Judul_Buku = htmlspecialchars($data["Judul_Buku"]);
$Penulis = htmlspecialchars($data["Penulis"]);
$Penerbit = htmlspecialchars($data["Penerbit"]);
$Tebal_buku = htmlspecialchars($data["Tebal_buku"]);
  

  $query = "UPDATE buku
              SET
        
              cover_buku = '$cover_buku',
              Judul_Buku = '$Judul_Buku',
              Penulis = '$Penulis',
              Pernerbit = '$Penerbit',
              Tebal_buku = '$Tebal_buku',
              WHERE id =  '$id' ";

      mysqli_query($conn,$query);

      return mysqli_affected_rows($conn); 
}


function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah digunakan');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('','$username','$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}




<?php

$host="localhost";
$user="root";
$pass="";
$database="perpustakaan_afif";

$koneksi=mysqli_connect($host, $user, $pass);
if ($koneksi) {
    $buka=mysqli_select_db($koneksi, $database) ;
    
    //echo "Database dapat terhubung" ;
    if (!$buka) {
      //  echo "Database eror : ". mysqli_connect_error();
    }
}else {
    echo "mysql error ";
}

?>
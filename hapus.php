<?php
include "koneksi.php";

$kodebuku = $_GET ['kodebuku'];

$hapus = mysqli_query($koneksi, "DELETE FROM buku where kodebuku = '$kodebuku'");

if ($hapus){
    //echo "<script> alert ('Data Berhasil Di Hapus')</script>";
header ("refresh:0;index.php");
}else {
    //echo "<script> alert ('Data Tidak Berhasil Di Hapus')</script>";
header ("refresh:0;index.php");
}   

?>

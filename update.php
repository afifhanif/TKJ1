<?php
include "koneksi.php";

$kodebuku = $_POST ['kodebuku'];
$namabuku = $_POST ['namabuku'];
$pengarang = $_POST ['pengarang'];
$harga = $_POST ['harga'];

$update = mysqli_query ($koneksi, "update buku set namabuku='$namabuku', pengarang='$pengarang', harga='$harga' where kodebuku = '$kodebuku'");

if ($update){
    //echo "<script> alert ('Data Berhasil Di Ubah')</script>";
header ("refresh:0;index.php");
}else {
    //echo "<script> alert ('Data Tidak Berhasil Di Ubah')</script>";
header ("refresh:0;index.php");
}   

?>
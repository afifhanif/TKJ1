<?php
include "koneksi.php";

$kodebuku = $_POST['kodebuku'];
$namabuku = $_POST['namabuku'];
$pengarang = $_POST['pengarang'];
$harga = $_POST['harga'];

$simpan = mysqli_query($koneksi, "insert into buku values ('$kodebuku', '$namabuku', '$pengarang', '$harga')");

if ($simpan) {
    //echo "<script> alert ('Data Buku Berhasil Disimpan')</script>";
    header ("refresh:0;index.php");
}else {
    //echo "<script> alert ('Data Buku Tidak Berhasil Disimpan')</script>";
    header ("refresh:0;index.php");
}

?>
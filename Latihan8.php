<?php

// Koneksi ke Database
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();

// Ambil data berdasarkan Kode Dosen
$kode_dosen= $_GET['kode_dosen'];

// Perintah delete data berdasarkan Kode Dosen
$query=mysqli_query($con,"DELETE FROM tbl_dosen WHERE kode_dosen='$kode_dosen'")or die(mysql_error());


header('location:latihan5.php');
?>
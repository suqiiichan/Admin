<?php 
// koneksi database
include '../../conn.php';
 
// menangkap data id yang di kirim dari url
$idkaryawan = $_GET['id'];
 
 
// menghapus data dari database
$result = mysqli_query($conn,"DELETE FROM karyawan where idkaryawan='$idkaryawan'");

// echo mysqli_error($result);
// mengalihkan halaman kembali ke index.php
header("location:././datakaryawan.php");

 
?>
<?php
include "../../conn.php";
$nama = $_POST['nama'];
$kodekaryawan = $_POST['kodekaryawan'];
$bagian = $_POST['bagian'];
$kategori = $_POST['kategori'];
$no_rekening = $_POST['no_rekening'];
$no_ktp = $_POST['no_ktp'];
$nokk = $_POST['nokk'];
$alamat_lengkap = $_POST['alamat_lengkap'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$dusun = $_POST['dusun'];
$kecamatan = $_POST['kecamatan'];
$kota = $_POST['kota'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$ibu = $_POST['ibu'];
$usia = $_POST['usia'];
$pendidikan = $_POST['pendidikan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$stts = $_POST['stts'];
$status_perpajakan = $_POST['status_perpajakan'];
$telepon = $_POST['telepon'];
$no_bpjs = $_POST['no_bpjs'];
$keterangan = $_POST['keterangan'];
$referensi = $_POST['referensi'];
$jkk = $_POST['jkk'];
$jkm = $_POST['jkm'];
$jht = $_POST['jht'];
$jp = $_POST['jp'];
// $koneksi = mysqli_connect("localhost","root","","mja");
$sql = "INSERT INTO karyawan(nama,kodekaryawan,bagian,kategori,no_rekening,no_ktp,nokk,alamat_lengkap,rt,rw,dusun,kecamtan,kota,tempat_lahir,tanggal_lahir,ibu,pendidikan,jenis_kelamin,stts,status_perpajakan,telepon,no_bpjs,keterangan,referensi,jkk,jkm,jht,jp) VALUES('','$nama', '$kodekaryawan', '$bagian', '$kategori', '$no_rekening', '$no_ktp', '$nokk', '$alamat_lengkap', '$rt', '$rw', '$dusun', '$kecamatan', '$kota', '$tempat_lahir', '$tanggal_lahir', '$usia', '$pendidikan', '$status_perpajakan', '$telepon', '$no_bpjs', '$keterangan', '$referensi', '$jkk', '$jkm', '$jht', '$jp')";

// $result = mysqli_query($koneksi, "SELECT * FROM karyawan");
$result= mysqli_query($conn, "INSERT INTO karyawan(nama,kodekaryawan,bagian,kategori,no_rekening,no_ktp,nokk,alamat_lengkap,rt,rw,dusun,kecamatan,kota,tempat_lahir,tanggal_lahir,ibu,usia,pendidikan,jenis_kelamin,stts,status_perpajakan,telepon,no_bpjs,keterangan,referensi,jkk,jkm,jht,jp) 
VALUES('$nama', '$kodekaryawan', '$bagian', '$kategori', '$no_rekening', '$no_ktp', '$nokk', '$alamat_lengkap', '$rt', '$rw', '$dusun', '$kecamatan', '$kota', '$tempat_lahir', '$tanggal_lahir', '$ibu', '$usia', '$pendidikan', '$jenis_kelamin', '$stts', '$status_perpajakan', '$telepon', '$no_bpjs', '$keterangan', '$referensi', '$jkk', '$jkm', '$jht', '$jp')");
// $resultmysqli_query("INSERT INTO karyawan VALUES('','$nama', '$kodekaryawan', '$bagian', '$kategori', '$no_rekening', '$no_ktp', '$nokk', '$alamat_lengkap', '$rt', '$rw', '$dusun', '$kecamatan', '$kota', '$tempat_lahir', '$tanggal_lahir', '$usia', '$pendidikan', '$status_perpajakan', '$telepon', '$no_bpjs', '$keterangan', '$referensi', '$jkk', '$jkm', '$jht', '$jp')");
/// echo $result;

echo 
"<script> alert('berhasil');</script>";
header("location:././admin.php");

// echo 
// "<script> alert('berhasil');</script>";

// var_dump($result);
// echo mysqli_error($conn);
// $lokasi = "../forms/inputkaryawan.php";


// echo $lokasi;
// header("location:inputkaryawan.php?pesan=input");
// if(isset($_GET['pesan'])){
// 	$pesan = $_GET['pesan'];
// 	if($pesan == "input"){
// 		echo "Data berhasil di input.";
// 	}else if($pesan == "update"){
// 		echo "Data berhasil di update.";
// 	}else if($pesan == "hapus"){
// 		echo "Data berhasil di hapus.";
// 	}
// }

?>
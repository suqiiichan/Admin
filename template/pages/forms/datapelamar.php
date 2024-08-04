<?php
include "../../conn.php";

    $nama = $_POST['nama'];
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
    $usia = $_POST['usia'];
    $ibu = $_POST['ibu'];
    $pendidikan = $_POST['pendidikan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $stts = $_POST['stts'];
    $telepon = $_POST['telepon'];

    $sql = "INSERT INTO pelamar(nama,no_ktp,nokk,alamat_lengkap,rt,rw,dusun,kecamtan,kota,tempat_lahir,tanggal_lahir,pendidikan,ibu,jenis_kelamin,stts,telepon) VALUES('','$nama', '$no_ktp', '$nokk', '$alamat_lengkap', '$rt', '$rw', '$dusun', '$kecamatan', '$kota', '$tempat_lahir', '$tanggal_lahir', '$usia', '$pendidikan', '$ibu' '$telepon')";

    $result= mysqli_query($conn, "INSERT INTO pelamar(nama,no_ktp,nokk,alamat_lengkap,rt,rw,dusun,kecamtan,kota,tempat_lahir,tanggal_lahir,pendidikan,ibu,jenis_kelamin,stts,telepon) VALUES('','$nama', '$no_ktp', '$nokk', '$alamat_lengkap', '$rt', '$rw', '$dusun', '$kecamatan', '$kota', '$tempat_lahir', '$tanggal_lahir', '$usia', '$pendidikan', '$ibu' '$telepon')");
// $resultmysqli_query("INSERT INTO karyawan VALUES('','$nama', '$kodekaryawan', '$bagian', '$kategori', '$no_rekening', '$no_ktp', '$nokk', '$alamat_lengkap', '$rt', '$rw', '$dusun', '$kecamatan', '$kota', '$tempat_lahir', '$tanggal_lahir', '$usia', '$pendidikan', '$status_perpajakan', '$telepon', '$no_bpjs', '$keterangan', '$referensi', '$jkk', '$jkm', '$jht', '$jp')");
    // echo "tersimpan";

header("location:././admin.php");

echo 
"<script> alert('berhasil');</script>";

// echo $result;
// var_dump($result);
    echo mysqli_error($conn);
    // $lokasi = "../forms/inputkaryawan.php";


 ?>
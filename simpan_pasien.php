<?php
$Norekam_medik  = $_POST['Norekam_medik'];
$Nama_Pasien    = $_POST['Nama_Pasien'];
$Nomor_HP       = $_POST['Nomor_HP'];
$Tanggal_Lahir  = $_POST['Tanggal_Lahir'];
$Jenis_Kelamin  = $_POST['Jenis_Kelamin'];
$Alamat         = $_POST['Alamat'];
$id_diagnosa    = $_POST['id_diagnosa'];
$id_dokter     = $_POST['id_dokter'];
$Ruang      = $_POST['Ruang'];

include 'koneksi.php';
$query = "INSERT INTO pasien (Norekam_medik,Nama_Pasien,Nomor_HP,Tanggal_Lahir,Jenis_Kelamin,Alamat,id_diagnosa,id_dokter,Ruang) VALUES('$Norekam_medik','$Nama_Pasien','$Nomor_HP','$Tanggal_Lahir','$Jenis_Kelamin','$Alamat','$id_diagnosa','$id_dokter','$Ruang')";
$insert = mysqli_query($connect,$query);
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:index.php?status=".$status)
?>
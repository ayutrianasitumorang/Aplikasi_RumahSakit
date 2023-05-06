<?php
$Norekam_medik  = $_POST['Norekam_medik'];
$Nama_Pasien    = $_POST['Nama_Pasien'];
$Nomor_HP       = $_POST['Nomor_HP'];
$Tanggal_Lahir  = $_POST['Tanggal_Lahir'];
$Jenis_Kelamin  = $_POST['Jenis_Kelamin'];
$Alamat         = $_POST['Alamat'];
$id_diagnosa    = $_POST['id_diagnosa'];
$id_dokter      = $_POST['id_dokter'];
$Ruang          = $_POST['Ruang'];


include 'koneksi.php';
$query = "UPDATE pasien SET Nama_Pasien='$Nama_Pasien',Nomor_HP='$Nomor_HP',Tanggal_Lahir='$Tanggal_Lahir',Jenis_Kelamin='$Jenis_Kelamin',Alamat='$Alamat',id_diagnosa='$id_diagnosa',Ruang='$Ruang',id_dokter='$id_dokter' WHERE Norekam_medik='$Norekam_medik'";
$update = mysqli_query($connect,$query);
if($update){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:index.php?status=".$status)
?>
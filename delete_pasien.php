<?php
$Norekam_medik = $_GET['Norekam_medik'];
include('koneksi.php');
$delete = mysqli_query($connect,"delete from pasien where Norekam_medik='$Norekam_medik'");
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:index.php?status=".$status)
?>
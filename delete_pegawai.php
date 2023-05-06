<?php
$id = $_GET['id'];
include('koneksi.php');
$delete = mysqli_query($connect,"delete from pegawai where id='$id'");
if($insert){
    $status = "berhasil";
}else{
    $status = "gagal";
}
header("location:list_pegawai.php?status=".$status)
?>
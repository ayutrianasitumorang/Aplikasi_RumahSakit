<?php
$Username = $_POST['Username'];
$Password = $_POST['Password'];

include 'koneksi.php';

$pegawai = mysqli_query($connect, "select * from pegawai where Username='$Username' and Password='$Password'");
$check = mysqli_num_rows($pegawai);
if($check>0){
    session_start();
    $pegawaiRow = mysqli_fetch_array($pegawai);
    $_SESSION['Username'] = $pegawaiRow['Username'];
    $_SESSION['Password'] = $pegawaiRow['Password'];
    header("Location:index.php");
}else{
    header("location: login.php");
}
?>

?>
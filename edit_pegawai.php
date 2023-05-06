<?php
include 'header.php';
$id  = $_GET['id'];
$query   = mysqli_query($connect, "select * from pegawai where id='$id'");
$pegawai = mysqli_fetch_array($query);
?>
<div class="container" style="margin-top: 50px;">
    <h4>Input Data Pegawai</h4>
    <form action="update_pegawai.php" method="post">
    <table class="table table-bordered">
        <tr>
            <td>id</td>
            <td><input type="textbox" name="id" value="<?php echo $pegawai['id'] ?>" placeholder="id" class="form-control"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input name="Nama" type="textbox" value="<?php echo $pegawai['Nama'] ?>" placeholder="Nama_Lengkap" class="form-control"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input name="Username" type="textbox" value="<?php echo $pegawai['Username'] ?>" placeholder="USername" class="form-control"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input name="Password" type="password" value="<?php echo $pegawai['Password'] ?>" placeholder="Password" class="form-control"></td>
        </tr>
        <tr>
         <td></td>
            <td>
                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                <a href="index.php" class="btn btn-primary">Kembali</a>
            </td>
        </tr>
            </table>
</form>
</div>
<?php
include 'footer.php';
?>

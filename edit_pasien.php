<?php
include 'header.php';

$Norekam_medik  = $_GET['Norekam_medik'];
$query          = mysqli_query($connect, "select * from pasien where Norekam_medik='$Norekam_medik'");
$pasien         = mysqli_fetch_array($query);

?>
<div class="container" style = "margin-top: 50px;">
    <h4>Update Data Pasien</h4>
    <form action="update_pasien.php" method="post">
    <table class="table table-bordered">
    <tr>
            <td>Norekam_medik</td>
            <td><input type="text" name="Norekam_medik" value="<?php echo $pasien['Norekam_medik'] ?>" placeholder="Norekam_medik" class="form-control"></td>
        </tr>
        <tr>
            <td>Nama_Pasien</td>
            <td><input type="text" name="Nama_Pasien" value="<?php echo $pasien['Nama_Pasien'] ?>" placeholder="Nama_Pasien" class="form-control"></td>
        </tr>
        <tr>
            <td>Nomor_HP</td>
            <td><input type="text" name="Nomor_HP" value="<?php echo $pasien['Nomor_HP'] ?>" placeholder="Nomor_HP" class="form-control"></td>
        </tr>
        <tr>
            <td>Tanggal_Lahir</td>
            <td><input type="date" name="Tanggal_Lahir" value="<?php echo $pasien['Tanggal_Lahir'] ?>" placeholder="Tanggal_Lahir" class="form-control"></td>
        </tr>
        <tr>
            <td>Jenis_Kelamin</td>
            <td>
                <select name="Jenis_Kelamin" class="form-control">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
            </select></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="Alamat" value="<?php echo $pasien['Alamat'] ?>" placeholder="Alamat" class="form-control"></td>
        </tr>
        <tr>
            <td>id_diagnosa</td>
            <td>
                <select name="id_diagnosa" class="form-control">
                    <?php
                $diagnosa = mysqli_query($connect,"select * from diagnosa");
                while ($dgns = mysqli_fetch_array($diagnosa)){
                    echo "<option value='".$dgns['id_diagnosa']."' ";
                echo $dgns['id_diagnosa']==$pasien['id_diagnosa']?"selected":"";
                echo ">".$dgns['nama_diagnosa']."</option>";                
            }
        ?>
        </select>
                </select><td>
                </tr>
                <tr>
        <td>Dokter</td>
            <td>
                <select name="id_dokter" class="form-control">
                    <?php
                $dokter = mysqli_query($connect, "select * from dokter");
                while ($dok = mysqli_fetch_array($dokter)){
                    echo "<option value='".$dok['id_dokter']."'>".$dok['nama_dokter']."</option>";
            }
        ?>
        </select>
                </select><td>
                </tr>
        <tr>
            <td>Ruang</td>
            <td><input type="text" name="Ruang" value="<?php echo $pasien['Ruang'] ?>" placeholder="Ruang" class="form-control"></td>
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
<?php include 'footer.php'; ?>

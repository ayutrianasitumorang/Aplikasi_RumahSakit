<?php
include 'header.php';?>
<div class="container" style="margin-top: 50px;">
    <h4>Input Data Pasien</h4>
    <form action="simpan_pasien.php" method="post">
    <table class="table table-bordered">
        <tr>
            <td>Norekam_medik</td>
            <td><input name="Norekam_medik" type="text" placeholder="Norekam_medik" class="form-control"></td>
        </tr>
        <tr>
            <td>Nama_Pasien</td>
            <td><input name="Nama_Pasien" type="text" placeholder="Nama_Pasien" class="form-control"></td>
        </tr>
        <tr>
            <td>Nomor_HP</td>
            <td><input name="Nomor_HP" type="text" placeholder="Nomor_HP" class="form-control"></td>
        </tr>
        <tr>
            <td>Tanggal_Lahir</td>
            <td><input name="Tanggal_Lahir" type="date" placeholder="Tanggal_Lahir" class="form-control"></td>
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
            <td><input name="Alamat" type="text" placeholder="Alamat" class="form-control"></td>
        </tr>
        <tr>
        <td>Diagnosa</td>
            <td>
                <select name="id_diagnosa" class="form-control">
                    <?php
                $diagnosa = mysqli_query($connect, "select * from diagnosa");
                while ($dgns = mysqli_fetch_array($diagnosa)){
                    echo "<option value='".$dgns['id_diagnosa']."'>".$dgns['nama_diagnosa']."</option>";
            }
        ?>
        </select>
                </select><td>
                </tr>
            </td>
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
            </td>
        </tr>
        <tr>
            <td>Ruang</td>
            <td><input name="Ruang" type="text" placeholder="Ruang" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-success">Simpan Data</button>
                <a href="" class="btn btn-primary">Kembali</a>
            </td>
            </tr>
            </table>
</form>
</div>
<?php
include 'footer.php';
?>

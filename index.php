<?php
include 'header.php';
?>

        <div class="container-fluid" style="margin-top: 50px;">
        <h4>Data Pasien</h4>
        <a href="tambah_pasien.php" class="btn btn-info">Tambah Data</a>
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Norekam_medik</th>
                <th>Nama_Pasien</th>
                <th>Nomor_HP</th>
                <th>Tanggal_Lahir</th>
                <th>Jenis_Kelamin</th>
                <th>Alamat</th>
                <th>Diagnosa</th>
                <th>Dokter</th>
                <th>Ruang</th>
                <th width="200">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $nomor  = 1;
            $pasien = mysqli_query($connect,"select p.*,d.nama_diagnosa,m.nama_dokter
            from pasien as p 
            join diagnosa as d on p.id_diagnosa=d.id_diagnosa
            join dokter as m on p.id_dokter=m.id_dokter;");
            while($row = mysqli_fetch_array($pasien)){
            ?>
            <tr>
                <td><?php echo $nomor;?></td>
                <td><?php echo $row['Norekam_medik'];?></td>
                <td><?php echo $row['Nama_Pasien'];?></td>
                <td><?php echo $row['Nomor_HP'];?></td>
                <td><?php echo $row['Tanggal_Lahir'];?></td>
                <td><?php echo $row['Jenis_Kelamin'];?></td>
                <td><?php echo $row['Alamat'];?></td>
                <td><?php echo $row['nama_diagnosa'];?></td>
                <td><?php echo $row['nama_dokter'];?></td>
                <td><?php echo $row['Ruang'];?></td>
                <td>
                    <a href="edit_pasien.php?Norekam_medik=<?php echo $row['Norekam_medik'];?>" class="btn btn-danger">Edit</a>
                    <a href="delete_pasien.php?Norekam_medik=<?php echo $row['Norekam_medik'];?>" class="btn btn-warning">Delete</a>
                </td>
                <?php
                $nomor++;
                }
                ?>
                </tbody>
            </table>
            </div>
            <?php
            include 'footer.php';
                ?>

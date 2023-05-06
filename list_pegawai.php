<?php
include 'header.php';
?>

        <div class="container" style="margin-top: 50px;">
        <h4>Data Pegawai</h4>
        <a href="tambah_pegawai.php" class="btn btn-info">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>id</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th width="200">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                $pegawai = mysqli_query($connect, "Select * from pegawai");
                while($row= mysqli_fetch_array($pegawai)){
                ?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Nama']; ?></td>
                    <td><?php echo $row['Username']; ?></td>
                    <td><?php echo $row['Password']; ?></td>
                    <td>
                    <a href="edit_pegawai.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Edit</a>
                    <a href="delete_pegawai.php?id=<?php echo $row['id'];?>" class="btn btn-warning">Delete</a>
                </td>
                </tr>
                <?php
                $nomor++;
                }
                ?>
            </tbody>
            </table>
            </div>
            <?php include 'footer.php'; ?>
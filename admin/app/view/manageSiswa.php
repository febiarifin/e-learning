<a href="?m=tambahSiswa" class="btn btn-success"><?php include ICON . 'add.php'; ?> Tambah Siswa</a>
<br>
<br>
<div class="container-dashboard">
    <table class="table table-bordered" id="dataTable" cellspacing="0">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>JK</th>
                <th>Tempat/Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Password</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>JK</th>
                <th>Tempat/Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Password</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $sql = "SELECT * FROM siswa";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?= $row['nis'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['jeniskelamin'] ?></td>
                    <td><?= $row['tempat_lahir'] . ", " . $row['tanggal_lahir'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td><?= $row['telepon'] ?></td>
                    <td><?= $row['password'] ?></td>
                    <td><img src="<?= $url; ?>upload/profil/<?= $row['foto'] ?>" alt="profil" width="40" height="40"></td>
                    <td>
                        <a href="?m=editSiswa&nis=<?= base64_encode($row['nis']) ?>&token=<?= get_token(50); ?>" class="btn btn-primary btn-sm"><?php include ICON . 'edit.php'; ?></a>
                        <a href="?m=hapusSiswa&nis=<?= base64_encode($row['nis']) ?>&token=<?= get_token(50); ?>" class="btn btn-danger btn-sm"><?php include ICON . 'delete.php'; ?></a>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>
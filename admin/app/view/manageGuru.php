<a href="?m=tambahGuru" class="btn btn-success"><?php include ICON . 'add.php'; ?> Tambah Guru</a>
<br>
<br>
<div class="container-dashboard">
    <table class="table table-bordered" id="dataTable" cellspacing="0">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIP</th>
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
                <th>NO</th>
                <th>NIP</th>
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
            $sql = "SELECT * FROM guru";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $no = 0;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $no++;  ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nip'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['jeniskelamin'] ?></td>
                    <td><?= $row['tempat_lahir'] . ", " . $row['tanggal_lahir'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td><?= $row['telepon'] ?></td>
                    <td><?= $row['password'] ?></td>
                    <td><img src="<?= $url; ?>upload/profil/<?= $row['foto'] ?>" alt="profil" width="40" height="40"></td>
                    <td>
                        <a href="?m=editGuru&nip=<?= base64_encode($row['nip']) ?>&token=<?= get_token(50); ?>" class="btn btn-primary btn-sm"><?php include ICON . 'edit.php'; ?></a>
                        <a href="?m=hapusGuru&nip=<?= base64_encode($row['nip']) ?>&token=<?= get_token(50); ?>" class="btn btn-danger btn-sm"><?php include ICON . 'delete.php'; ?></a>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>
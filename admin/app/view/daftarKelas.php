<br>
<div class="container-dashboard">
    <a href="?m=buatKelas" class="btn btn-primary mb-3"><?php include ICON . 'add.php'; ?>
        Buat Kelas Siswa</a>
    <table class="table table-bordered" id="dataTable" cellspacing="0">
        <thead>
            <tr>
                <th>NO</th>
                <th>Kelas</th>
                <th>Wali Kelas</th>
                <th>Siswa</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>NO</th>
                <th>Kelas</th>
                <th>Wali Kelas</th>
                <th>Siswa</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $sql = "SELECT DISTINCT kelas,nip FROM kelas_siswa";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $no = 0;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $no++;    ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $row['kelas'] ?></td>
                <td><?= $row['nip'] ?></td>
                <td>
                    <?php
                        $sql_siswa = "SELECT * FROM kelas_siswa WHERE kelas=:kelas";
                        $stmt_siswa = $con->prepare($sql_siswa);
                        $kelas = $row['kelas'];
                        $params_siswa = array(
                            ":kelas" => $kelas
                        );
                        $stmt_siswa->execute($params_siswa);
                        $jumlah = 0;
                        while ($row_siswa = $stmt_siswa->fetch(PDO::FETCH_ASSOC)) {
                            $jumlah++;
                            echo "<b>[" . $jumlah . "]</b>" . $row_siswa['nis'];
                        }
                        ?>
                </td>
                <td>
                    <a href="?m=hapusKelasSiswa&kelas=<?= base64_encode($row['kelas']) ?>&token=<?= get_token(50); ?>"
                        class="btn btn-danger btn-sm"><?php include ICON . 'delete.php'; ?></a>
                </td>
            </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>
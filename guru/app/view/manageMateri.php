<a href="?m=materiPelajaran" class="btn btn-success"><?php include ICON . 'add.php'; ?> Buat Materi Pelajaran</a>
<br>
<br>
<div class="container-dashboard">
    <table class="table table-bordered" id="dataTable" cellspacing="0">
        <thead>
            <tr>
                <th>NO</th>
                <!-- <th>ID Pelajaran</th> -->
                <th>Mata Pelajaran</th>
                <th>Judul</th>
                <th>Ringkasan</th>
                <th>Kelas</th>
                <th>File</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>NO</th>
                <!-- <th>ID Pelajaran</th> -->
                <th>Mata Pelajaran</th>
                <th>Judul</th>
                <th>Ringkasan</th>
                <th>Kelas</th>
                <th>File</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $sql = "SELECT * FROM materipelajaran WHERE nip=:nip";
            $stmt = $con->prepare($sql);
            $params = array(
                ":nip" => $nip
            );
            $stmt->execute($params);
            $no = 0;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $no++;
                $ringkasan = $row['ringkasan'];
                if (strlen($ringkasan) > 30) {
                    $ringkasan = substr($ringkasan, 0, 30) . "....";
                }
                $file = $row['file'];
                if (strlen($file) > 30) {
                    $file = substr($file, 0, 10) . "....";
                }
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <!-- <td><?= $row['idpelajaran'] ?></td> -->
                    <td>
                        <?php
                        $sql_pelajaran = "SELECT * FROM pelajaran WHERE id=:id";
                        $stmt_pelajaran = $con->prepare($sql_pelajaran);
                        $id = $row['idpelajaran'];
                        $params_pelajaran = array(
                            ":id" => $id
                        );
                        $stmt_pelajaran->execute($params_pelajaran);
                        while ($row_pelajaran = $stmt_pelajaran->fetch(PDO::FETCH_ASSOC)) {
                            echo $row_pelajaran['namapelajaran'];
                        }
                        ?>
                    </td> 
                    <td><?= $row['judul'] ?></td>
                    <td><?= $ringkasan; ?></td>
                    <td><?= $row['kelas'] ?></td>
                    <td><?= $file ?></td>
                    <td><?= $row['tanggal'] ?></td>
                    <td>
                        <?php  
                            $id_materi=$row['id'];
                            $data = "SELECT COUNT(*) FROM diskusi WHERE idmateri='$id_materi' ";
                            $stmt_data = $con->prepare($data);
                            $stmt_data->execute();
                            $jumlah_data = $stmt_data->fetchColumn();
                        ?>
                        <a href="?m=absen&id=<?= base64_encode($row['id']) ?>&judul=<?= $row['judul'] ?>" class="btn btn-success btn-sm" target="_blank"><?php include ICON . 'user.php'; ?> Absen Siswa</a>
                        <a href="?m=lihatMateri&id=<?= base64_encode($row['id']) ?>&token=<?= get_token(50); ?>" class="btn btn-primary btn-sm" target="_blank"><?php include ICON . 'eye.php'; ?>Lihat Materi</a>
                        <a href="?m=diskusi&id_materi=<?= $row['id'] ?>&judul=<?= $row['judul'] ?>&token=<?= get_token(50); ?>" class="btn btn-warning btn-sm"><?php include ICON . 'diskusi.php'; ?>Diskusi [<?= $jumlah_data ?>]</a>
                        <a href="?m=hapusMateri&id=<?= base64_encode($row['id']) ?>&token=<?= get_token(50); ?>&username=<?= $nama ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus ? ')"><?php include ICON . 'delete.php'; ?>Hapus</a>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>
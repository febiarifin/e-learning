<br>
<div class="container-dashboard">
    <table class="table table-bordered" id="dataTable" cellspacing="0">
        <thead>
            <tr>
                <th>NO</th>
                <th>Kelas</th>
                <th>Mapel</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>NO</th>
                <th>Kelas</th>
                <th>Mapel</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $sql = "SELECT DISTINCT kelas FROM kelas_mapel";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $no = 0;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $no++;    ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['kelas'] ?></td>
                    <td>
                        <?php
                        $sql_mapel = "SELECT * FROM kelas_mapel WHERE kelas=:kelas";
                        $stmt_mapel = $con->prepare($sql_mapel);
                        $kelas = $row['kelas'];
                        $params_mapel = array(
                            ":kelas" => $kelas
                        );
                        $stmt_mapel->execute($params_mapel);
                        $jumlah = 0;
                        while ($row_mapel = $stmt_mapel->fetch(PDO::FETCH_ASSOC)) {
                            $jumlah++;
                            $sql_pelajaran = "SELECT * FROM pelajaran WHERE id=:id";
                            $stmt_pelajaran = $con->prepare($sql_pelajaran);
                            $id = $row_mapel['matapelajaran'];
                            $params_pelajaran = array(
                                ":id" => $id
                            );
                            $stmt_pelajaran->execute($params_pelajaran);
                            while ($row_pelajaran = $stmt_pelajaran->fetch(PDO::FETCH_ASSOC)) {
                                echo "<b>[" . $jumlah . "]</b>" . $row_pelajaran['namapelajaran'];
                            }
                        }
                        ?>
                    </td>
                    <td>
                        <a href="?m=hapusMapel&kelas=<?= base64_encode($row['kelas']) ?>&token=<?= get_token(50); ?>" class="btn btn-danger btn-sm"><?php include ICON . 'delete.php'; ?></a>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>
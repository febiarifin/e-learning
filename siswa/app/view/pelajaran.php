<div>
    <?php
    $sql = "SELECT * FROM kelas_mapel WHERE kelas=:kelas";
    $stmt = $con->prepare($sql);
    $params = array(
        ":kelas" => $kelas
    );
    $stmt->execute($params);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $sql_pelajaran = "SELECT * FROM pelajaran WHERE id=:id";
        $stmt_pelajaran = $con->prepare($sql_pelajaran);
        $id = $row['matapelajaran'];
        $params_pelajaran = array(
            ":id" => $id
        );
        $stmt_pelajaran->execute($params_pelajaran);
        while ($row_pelajaran = $stmt_pelajaran->fetch(PDO::FETCH_ASSOC)) {
            $sql_guru = "SELECT * FROM guru WHERE nip=:nip";
            $stmt_guru = $con->prepare($sql_guru);
            $nip = $row_pelajaran['nip'];
            $params_guru = array(
                ":nip" => $nip
            );
            $stmt_guru->execute($params_guru);

            $sql_hitung = "SELECT COUNT(*) FROM materipelajaran WHERE idpelajaran=:idmapel AND kelas=:kelas";
            $stmt_hitung = $con->prepare($sql_hitung);
            $idmapel = $row_pelajaran['id'];
            $params_hitung = array(
                ":idmapel" => $idmapel,
                ":kelas" => $kelas
            );
            $stmt_hitung->execute($params_hitung);
            $jumlah_materi = $stmt_hitung->fetchColumn();

            while ($row_guru = $stmt_guru->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="col-sm-12">
                    <div class="card text-white bg-dark">
                        <div class="card-header"><?= $row_pelajaran['namapelajaran'] ?></div>
                        <div class="card-body">
                            <h6 class="card-title">Pengajar : <?= $row_guru['nama'] ?></h6>
                            <br>
                            <a href="?m=materi&idpelajaran=<?= $row_pelajaran['id'] ?>&kelas=<?= $kelas ?>&mapel=<?= $row_pelajaran['namapelajaran'] ?>&guru=<?= $row_guru['nama'] ?>" class="btn btn-primary btn-sm"><b><?= $jumlah_materi ?></b> Materi</a>
                        </div>
                    </div>
                </div>
                <br>
    <?php }
        }
    }
    ?>
</div>
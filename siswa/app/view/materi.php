<div>
    <?php
    $sql = "SELECT * FROM materipelajaran WHERE idpelajaran=:id AND kelas=:kelas";
    $stmt = $con->prepare($sql);
    $params = array(
        ":id" => $id,
        ":kelas" => $kelas
    );
    $stmt->execute($params);
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="card text-dark bg-light md-12">
            <div class="card-header">Pengajar : <?= $guru ?></div>
            <div class="card-body">
                <h5 class="card-title"><?= $row['judul'] ?></h5>
                <p class="card-text"><b>Ringkasan :</b><br><?= $row['ringkasan'] ?></p>
            </div>
            <div class="card-footer">
                <a href="?m=lihatMateri&id=<?= base64_encode($row['id']) ?>&username=<?= $nama ?>" class="btn btn-primary btn-sm" target="_blank">Lihat Materi <?php include ICON . 'eye.php'; ?></a>
                <a href="?m=absen&nis=<?= $nis ?>&username=<?= $nama ?>&id_materi=<?= $row['id'] ?>&kelas=<?= $kelas; ?>&guru=<?= $guru; ?>" class="btn btn-success btn-sm" target="_blank">Absen <?php include ICON . 'pelajaran.php'; ?></a>
                <a href="?m=diskusi&nis=<?= $nis ?>&username=<?= $nama ?>&id_materi=<?= $row['id'] ?>&judul=<?= $row['judul']; ?>&idpelajaran=<?= $id; ?>&kelas=<?= $kelas; ?>&guru=<?= $guru; ?>&mapel=<?= $mapel; ?>" class="btn btn-warning btn-sm">Diskusi <?php include ICON . 'diskusi.php'; ?></a>
            </div>
        </div>
        <br>
    <?php }
    ?>

</div>
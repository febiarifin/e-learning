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
                <a href="?m=lihatMateri&id=<?= base64_encode($row['id']) ?>&username=<?= $nama ?>" class="btn btn-primary" target="_blank">Lihat Materi <?php include ICON . 'eye.php'; ?></a>
            </div>
        </div>
        <br>
    <?php }
    ?>

</div>
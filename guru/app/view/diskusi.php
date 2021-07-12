<div>
    <a href="?m=manageMateri" class="btn btn-danger btn-sm mb-3"><?php include ICON.'left.php'; ?>Kembali</a>
    <hr>
    <div>
    <?php
        $batas = 5;
        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
        $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

        $previous = $halaman - 1;
        $next = $halaman + 1;
        
        $data = "SELECT COUNT(*) FROM diskusi";
        $stmt_data = $con->prepare($data);
        $stmt_data->execute();
        $jumlah_data = $stmt_data->fetchColumn();
        $total_halaman = ceil($jumlah_data / $batas);

        $sql = "SELECT * FROM diskusi WHERE idmateri=:id ORDER BY date_time DESC LIMIT $halaman_awal, $batas";
        $stmt = $con->prepare($sql);
        $params = array(
            ":id" => $id_materi
        );
        $stmt->execute($params);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $nis = $row['nis'];
            $nama = $row['nama'];
            $isi = $row['isi'];
            $date_time = $row['date_time'];

            $sql_siswa = "SELECT * FROM siswa WHERE nis=:nis";
            $stmt_siswa = $con->prepare($sql_siswa);
            $params_siswa = array(
                ":nis" => $nis
            );
            $stmt_siswa->execute($params_siswa);
            while ($row_siswa = $stmt_siswa->fetch(PDO::FETCH_ASSOC)) {
                $foto = $row_siswa['foto']; ?>
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-1">
                                <img src="<?= $url ?>upload/profil/<?= $row_siswa['foto'] ?>" alt="profil" width="40" height="40" style="border-radius: 100%;">
                            </div>
                            <div class="col-md-11">
                                <p><?= $row['nis'] ?> | <?= $row['nama'] ?> <br>
                                    <?= $row['date_time'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p><?= $row['isi']; ?></p>
                    </div>
                </div>
            <?php }
        }
    ?>
    </div>
    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" <?php if($halaman > 1){ echo "href='?m=diskusi&id_materi={$id_materi}&judul={$judul}&halaman=$previous'"; } ?>>
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <?php 
            for($x=1;$x<=$total_halaman;$x++){
                ?> 
                <li class="page-item"><a class="page-link" href="?m=diskusi&id_materi=<?= $id_materi ?>&judul=<?= $judul ?>&halaman=<?php echo $x ?>">
                    <?php echo $x; ?></a></li>
                <?php
            }
            ?>				
            <li class="page-item">
                <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?m=diskusi&id_materi={$id_materi}&judul={$judul}&halaman=$next'"; } ?>>
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
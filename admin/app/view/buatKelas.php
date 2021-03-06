<div class="container-dashboard">

    <form action="" method="post">
        <div class="row">
            <div class="col-md-2">
                <label for="validationCustom03" class="form-label">Jumlah Siswa</label>
                <input type="text" name="jumlah_post" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Jumlah Siswa
                </div>
            </div>
            <div class="col-md-5">
                <button style="margin-top:30px" type="submit" class="btn btn-success"><?php include ICON . 'add.php'; ?>
                    Buat Kelas</button>
            </div>
        </div>
    </form>
    <hr>
    <br>
    <form action="?m=prosesBuatKelas" method="post" enctype="multipart/form-data">
        <?php if (isset($_POST['jumlah_post'])) { ?>
        <input type="hidden" name="jumlah_post" value="<?= $_POST['jumlah_post'] ?>">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <button type="submit" class="btn btn-success mb-3"><?php include ICON . 'save.php'; ?>
                        Simpan</button>
                    <a href="?m=buatKelas" class="btn btn-danger mb-3"><?php include ICON . 'cancel.php'; ?>Batal</a>

                    <br>

                    <label for="">Kelas</label>
                    <select class="form-select form-control" name="kelas" id="validationCustom03" required>
                        <option selected disabled value="">Pilih....</option>
                        <?php
                            $sql_kelas = "SELECT kelas.kelas FROM kelas LEFT JOIN kelas_siswa ON kelas_siswa.kelas = kelas.kelas WHERE kelas_siswa.kelas IS NULL";
                            $stmt_kelas = $con->prepare($sql_kelas);
                            $stmt_kelas->execute();
                            while ($row_kelas = $stmt_kelas->fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?= $row_kelas['kelas'] ?>"><?= $row_kelas['kelas'] ?></option>
                        <?php }
                            ?>
                    </select>

                    <label for="">Wali Kelas</label>
                    <select class="form-select form-control" name="nip" id="validationCustom03" required>
                        <option selected disabled value="">Pilih....</option>
                        <?php
                            $sql_guru = "SELECT guru.nip, guru.nama FROM guru LEFT JOIN kelas_siswa ON kelas_siswa.nip = guru.nip WHERE kelas_siswa.nip IS NULL";
                            $stmt_guru = $con->prepare($sql_guru);
                            $stmt_guru->execute();
                            while ($row_guru = $stmt_guru->fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?= $row_guru['nip'] ?>">
                            <?= $row_guru['nama'] . "[" . $row_guru['nip'] . "]" ?></option>
                        <?php }
                            ?>
                    </select>

                    <label for="">Siswa</label>
                    <?php for ($i = 0; $i < $_POST['jumlah_post']; $i++) { ?>
                    <select class="form-select form-control mb-2" name="nis<?= $i ?>" id="validationCustom03" required>
                        <option selected disabled value="">Pilih....</option>
                        <?php
                                $sql_siswa = "SELECT siswa.nis, siswa.nama FROM siswa LEFT JOIN kelas_siswa ON kelas_siswa.nis = siswa.nis WHERE kelas_siswa.nis IS NULL";
                                $stmt_siswa = $con->prepare($sql_siswa);
                                $stmt_siswa->execute();
                                while ($row_siswa = $stmt_siswa->fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?= $row_siswa['nis'] ?>">
                            <?= $row_siswa['nama'] . "[" . $row_siswa['nis'] . "]" ?></option>
                        <?php }
                                ?>
                    </select>

                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </form>

</div>
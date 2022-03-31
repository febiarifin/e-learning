<div class="container-dashboard">

    <form action="" method="post">
        <div class="row">
            <div class="col-md-2">
                <label for="validationCustom03" class="form-label">Jumlah Mapel</label>
                <input type="text" name="jumlah_post" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Jumlah Siswa
                </div>
            </div>
            <div class="col-md-5">
                <button style="margin-top:30px" type="submit" class="btn btn-success"><?php include ICON . 'add.php'; ?>
                    Buat Mapel</button>
            </div>
        </div>
    </form>
    <hr>
    <br>
    <form action="?m=prosesBuatMapel" method="post" enctype="multipart/form-data">
        <div class="col-md-12">
            <?php if (isset($_POST['jumlah_post'])) { ?>
            <div class="card">
                <input type="hidden" name="jumlah_post" value="<?= $_POST['jumlah_post'] ?>">
                <div class="card-body">
                    <button type="submit" class="btn btn-success mb-3"><?php include ICON . 'save.php'; ?>
                        Simpan</button>
                    <a href="?m=buatMapel" class="btn btn-danger mb-3"><?php include ICON . 'cancel.php'; ?>Batal</a>

                    <br>

                    <label for="">Kelas</label>
                    <select class="form-select form-control mb-3" name="kelas" id="validationCustom03" required>
                        <option selected disabled value="">Pilih....</option>
                        <?php
                            $sql_kelas = "SELECT * FROM kelas";
                            $stmt_kelas = $con->prepare($sql_kelas);
                            $stmt_kelas->execute();
                            while ($row_kelas = $stmt_kelas->fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?= $row_kelas['kelas'] ?>"><?= $row_kelas['kelas'] ?></option>
                        <?php }
                            ?>
                    </select>

                    <label for="">Mata Pelajaran</label>

                    <?php for ($i = 0; $i < $_POST['jumlah_post']; $i++) { ?>
                    <select class="form-select form-control mb-2" name="matapelajaran<?= $i ?>" id="validationCustom03"
                        required>
                        <option selected disabled value="">Pilih....</option>
                        <?php
                                $sql_pelajaran = "SELECT * FROM pelajaran";
                                $stmt_pelajaran = $con->prepare($sql_pelajaran);
                                $stmt_pelajaran->execute();
                                while ($row_pelajaran = $stmt_pelajaran->fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?= $row_pelajaran['id'] ?>"><?= $row_pelajaran['namapelajaran'] ?>
                            <?php
                                        $nip_guru = $row_pelajaran['nip'];
                                        $sql_guru = "SELECT * FROM guru WHERE nip='$nip_guru'";
                                        $stmt_guru = $con->prepare($sql_guru);
                                        $stmt_guru->execute();
                                        while ($row_guru = $stmt_guru->fetch(PDO::FETCH_ASSOC)) {
                                            echo "/" . $row_guru['nama'];
                                        } ?>
                        </option>
                        <?php }
                                ?>
                    </select>


                    <?php  } ?>

                </div>
            </div>
            <?php  } ?>
        </div>
    </form>

</div>
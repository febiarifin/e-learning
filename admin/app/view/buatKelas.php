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
                <button style="margin-top:30px" type="submit" class="btn btn-success"><?php include ICON . 'add.php'; ?> Buat Kelas</button>
            </div>
        </div>
    </form>
    <hr>
    <br>
    <form action="?m=prosesBuatKelas" method="post" enctype="multipart/form-data">
        <input type="hidden" name="jumlah_post" value="<?= $_POST['jumlah_post'] ?>">
        <div class="col-md-12">
            <table class="table table-bordered" id="dataTable" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kelas</th>
                        <th>Wali Kelas</th>
                        <th>Siswa</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Kelas</th>
                        <th>Wali Kelas</th>
                        <th>Siswa</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    if (isset($_POST['jumlah_post'])) { ?>
                        <tr>
                            <td colspan="3">
                                <button type="submit" class="btn btn-success"><?php include ICON . 'save.php'; ?> Simpan</button>
                                <a href="?m=buatKelas" class="btn btn-danger"><?php include ICON . 'cancel.php'; ?> Batal</a>
                            </td>
                        </tr>
                        <?php for ($i = 0; $i < $_POST['jumlah_post']; $i++) { ?>
                            <tr>
                                <td>
                                    <select class="form-select form-control" name="kelas<?= $i ?>" id="validationCustom03" required>
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
                                </td>
                                <td>
                                    <select class="form-select form-control" name="nip<?= $i ?>" id="validationCustom03" required>
                                        <option selected disabled value="">Pilih....</option>
                                        <?php
                                        $sql_guru = "SELECT * FROM guru";
                                        $stmt_guru = $con->prepare($sql_guru);
                                        $stmt_guru->execute();
                                        while ($row_guru = $stmt_guru->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?= $row_guru['nip'] ?>"><?= $row_guru['nama'] . "[" . $row_guru['nip'] . "]" ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select form-control" name="nis<?= $i ?>" id="validationCustom03" required>
                                        <option selected disabled value="">Pilih....</option>
                                        <?php
                                        $sql_siswa = "SELECT * FROM siswa";
                                        $stmt_siswa = $con->prepare($sql_siswa);
                                        $stmt_siswa->execute();
                                        while ($row_siswa = $stmt_siswa->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?= $row_siswa['nis'] ?>"><?= $row_siswa['nama'] . "[" . $row_siswa['nis'] . "]" ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </td>
                            </tr>

                    <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </form>

</div>
<div>
    <!-- form tambah kelas -->
    <form action="?m=prosesTambahPelajaran" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-5">
                <label for="validationCustom04" class="form-label">Mata Pelajaran</label>
                <input type="text" name="namapelajaran" class="form-control" id="validationCustom03" required>
                <div class="invalid-feedback">
                    Masukkan Mata pelajaran
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Guru Pengampu</label>
                <select class="form-select form-control" name="nip" id="validationCustom04" required>
                    <option selected disabled value="">Pilih....</option>
                    <?php
                    $sql = "SELECT * FROM guru";
                    $stmt = $con->prepare($sql);
                    $stmt->execute();
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                        <option value="<?= $row['nip'] ?>"><?= $row['nama'] ?></option>
                    <?php }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <div style="margin-top:30px">
                    <button type="submit" class="btn btn-success"><?php include ICON . 'save.php'; ?> Simpan</button>
                    <a href="?m=tambahKelas" class="btn btn-danger"><?php include ICON . 'cancel.php'; ?> Batal</a>
                </div>
            </div>
        </div>
    </form>
    <br>
    <!-- tabel kelas -->
    <hr>
    <br>
    <div class="container-dashboard">
        <table class="table table-bordered" id="dataTable" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>Nama Mata Pelajaran</th>
                    <th>Kode Guru</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>Mata Pelajaran</th>
                    <th>Kode Guru</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $sql = "SELECT * FROM pelajaran";
                $stmt = $con->prepare($sql);
                $stmt->execute();
                $no = 0;
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $no++;  ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['namapelajaran'] ?></td>
                        <td><?= $row['nip'] ?></td>
                        <td>
                            <a href="?m=hapusPelajaran&id=<?= base64_encode($row['id']) ?>&token=<?= get_token(50); ?>" class="btn btn-danger btn-sm"><?php include ICON . 'delete.php'; ?></a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>
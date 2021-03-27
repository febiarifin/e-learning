<div>
    <!-- form tambah kelas -->
    <form action="?m=prosesTambahKelas" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-2">
                <label for="validationCustom04" class="form-label">Kelas</label>
                <select class="form-select form-control" name="kelas" id="validationCustom04" required>
                    <option selected disabled value="">Pilih....</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Jurusan</label>
                <select class="form-select form-control" name="jurusan" id="validationCustom04" required>
                    <option selected disabled value="">Pilih....</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Rekayasa Perangkat Lunak (RPL)">Rekayasa Perangkat Lunak (RPL)</option>
                    <option value="Teknik Komputer dan Jaringan (TKJ)">Teknik Komputer dan Jaringan (TKJ)</option>
                    <option value="Teknik Sepeda Motar (TSM)">Teknik Sepeda Motor (TSM)</option>
                    <option value="Teknik Kendaraan Ringan (TKR)">Teknik Kendaraan Ringan (TKR)</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="validationCustom04" class="form-label">Nomor</label>
                <select class="form-select form-control" name="nomor" id="validationCustom04" required>
                    <option selected disabled value="">Pilih....</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="col-md-4">
                <div style="margin-top:30px">
                    <button type="submit" class="btn btn-success"><?php include ICON . 'save.php'; ?> Simpan</button>
                    <a href="?m=manageKelas" class="btn btn-danger"><?php include ICON . 'cancel.php'; ?> Batal</a>
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
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>NO</th>
                    <th>ID</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $sql = "SELECT * FROM kelas";
                $stmt = $con->prepare($sql);
                $stmt->execute();
                $no = 0;
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $no++;  ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['kelas'] ?></td>
                        <td>
                            <a href="?m=hapusKelas&id=<?= base64_encode($row['id']) ?>&token=<?= get_token(50); ?>" class="btn btn-danger btn-sm"><?php include ICON . 'delete.php'; ?></a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</div>
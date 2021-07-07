<a href="#" data-toggle="modal" data-target="#hapus" class="btn btn-danger"><?php include ICON . 'delete.php'; ?> Hapus Semua Log</a>
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
                <th>Akses</th>
                <th>User</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>NO</th>
                <th>ID</th>
                <th>Akses</th>
                <th>User</th>
                <th>Waktu</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $sql = "SELECT * FROM log";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $no = 0;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $no++;  ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['akses'] ?></td>
                    <td><?= $row['user'] ?></td>
                    <td><?= $row['waktu'] ?></td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Perhatian</h5>
                <!-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button> -->
            </div>
            <div class="modal-body">
                Yakin ingin menghapus semua log activity ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="?m=hapusLog" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>
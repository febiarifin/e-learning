<a href="?m=hapusLog" class="btn btn-danger"><?php include ICON . 'delete.php'; ?> Hapus Semua Log</a>
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
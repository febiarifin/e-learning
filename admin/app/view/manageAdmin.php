<?php
if ($levelAdmin == "admin") { ?>
    <a href="?m=tambahAdmin" class="btn btn-success"><?php include ICON . 'add.php'; ?> Tambah Admin</a>
    <br>
    <br>
    <div class="container-dashboard">
        <table class="table table-bordered" id="dataTable" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>NO</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                $sql = "SELECT * FROM admin WHERE level=:level";
                $stmt = $con->prepare($sql);
                $level = "user";
                $params = array(
                    ":level" => $level
                );
                $stmt->execute($params);
                $no = 0;
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $no++;    ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['username'] ?></td>
                        <td><?= $row['password'] ?></td>
                        <td><img src="<?= $url; ?>upload/profil/<?= $row['foto'] ?>" alt="profil" width="40" height="40"></td>
                        <td>
                            <a href="?m=hapusAdmin&username=<?= base64_encode($row['username']) ?>&token=<?= get_token(50); ?>" class="btn btn-danger btn-sm"><?php include ICON . 'delete.php'; ?></a>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
<?php }
?>
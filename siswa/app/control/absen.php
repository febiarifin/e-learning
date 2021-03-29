<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Siswa</title>
</head>

<body>
    <?php
    // session_start();
    $nis = $_GET['nis'];
    $nama = $_GET['username'];
    $id_materi = $_GET['id_materi'];
    $kelas_siswa = $_GET['kelas'];

    $sql_absen = "SELECT * FROM absen WHERE nis=:nis AND idmateri=:idmateri";
    $stmt_absen = $con->prepare($sql_absen);
    $params_absen = array(
        ":nis" => $nis,
        ":idmateri" => $id_materi
    );
    $stmt_absen->execute($params_absen);
    $cek = $stmt_absen->fetch(PDO::FETCH_ASSOC);
    $cek_nis = $cek['nis'];
    if ($cek_nis > 0) {
        // $_SESSION['status'] = "Sudah Absen";
        // $_SESSION['id'] = $id_materi;
        // header('location: ?m=lihatAbsen');
    ?>
        <center>
            <h3><?= "Sudah absen"; ?></h3>
            <table border='1'>
                <tr>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Kelas Siswa</th>
                    <th>Waktu Absen</th>
                </tr>
                <?php
                $sql_data_absen = "SELECT * FROM absen WHERE idmateri=:idmateri";
                $stmt_data_absen = $con->prepare($sql_data_absen);
                $params_data_absen = array(":idmateri" => $id_materi);
                $stmt_data_absen->execute($params_data_absen);
                while ($row = $stmt_data_absen->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?= $row['nis'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['kelas'] ?></td>
                        <td><?= $row['waktu'] ?></td>
                    </tr>
                <?php  }
                ?>
            </table>
        </center>
        <?php  } else {
        $sql = "INSERT INTO absen(nis,nama,idmateri,kelas)VALUES(:nis,:nama,:id_materi,:kelas)";
        $stmt = $con->prepare($sql);
        $params = array(
            ":nis" => $nis,
            ":nama" => $nama,
            ":id_materi" => $id_materi,
            ":kelas" => $kelas_siswa
        );
        $absen = $stmt->execute($params);
        if ($absen) {
        ?>
            <center>
                <h3><?= "Absen berhasil"; ?></h3>
                <table border='1'>
                    <tr>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kelas Siswa</th>
                        <th>Waktu Absen</th>
                    </tr>
                    <?php
                    $sql_data_absen = "SELECT * FROM absen WHERE idmateri=:idmateri";
                    $stmt_data_absen = $con->prepare($sql_data_absen);
                    $params_data_absen = array(":idmateri" => $id_materi);
                    $stmt_data_absen->execute($params_data_absen);
                    while ($row = $stmt_data_absen->fetch(PDO::FETCH_ASSOC)) { ?>
                        <tr>
                            <td><?= $row['nis'] ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['kelas'] ?></td>
                            <td><?= $row['waktu'] ?></td>
                        </tr>
                <?php  }
                }
                ?>
                </table>
            </center>
        <?php
    }
        ?>
</body>

</html>
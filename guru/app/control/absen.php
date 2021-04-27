<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Siswa</title>
</head>

<body>
    <center>
        <h3>Absensi Siswa</h3>
        <?php
        if (isset($_GET['id'])) {
            $id_materi = base64_decode($_GET['id']);
            $judul = $_GET['judul'];
        ?>
            <p>Judul materi : <b><?= $judul; ?></b></p>

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

</body>

</html>
<?php
session_start();
if (isset($_GET['nip'], $_GET['token'])) {
    $nip = base64_decode($_GET['nip']);
    $token = $_GET['token'];

    $sql_foto = "SELECT * FROM guru WHERE nip=:nip";
    $stmt_foto = $con->prepare($sql_foto);
    $params_foto = array(
        ":nip" => $nip
    );
    $stmt_foto->execute($params_foto);
    $row = $stmt_foto->fetch(PDO::FETCH_ASSOC);
    $foto_lama = $row['foto'];
    $target = $url . "upload/profil/" . $foto_lama;

    if ($token) {
        $sql = "DELETE FROM guru WHERE nip=:nip";
        $stmt = $con->prepare($sql);
        $params = array(
            ":nip" => $nip
        );
        $hapus = $stmt->execute($params);

        if ($foto_lama != "profil.png") {
            unlink($target);
        }

        if ($hapus) {
            $_SESSION['sukses'] = "Data Guru berhasil di hapus.";
            header('location: ?m=manageGuru');
        } else {
            $_SESSION['gagal'] = "Data Guru gagal di hapus.";
            header('location: ?m=manageGuru');
        }
    }
}

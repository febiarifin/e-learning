<?php
session_start();
if (isset($_GET['nis'], $_GET['token'])) {
    $nis = base64_decode($_GET['nis']);
    $token = $_GET['token'];

    $sql_foto = "SELECT * FROM siswa WHERE nis=:nis";
    $stmt_foto = $con->prepare($sql_foto);
    $params_foto = array(
        ":nis" => $nis
    );
    $stmt_foto->execute($params_foto);
    $row = $stmt_foto->fetch(PDO::FETCH_ASSOC);
    $foto_lama = $row['foto'];
    $target = $url . "upload/profil/" . $foto_lama;

    if ($token) {
        $sql = "DELETE FROM siswa WHERE nis=:nis";
        $stmt = $con->prepare($sql);
        $params = array(
            ":nis" => $nis
        );
        $hapus = $stmt->execute($params);

        if ($foto_lama != "profil.png") {
            unlink($target);
        }

        if ($hapus) {
            $_SESSION['sukses'] = "Data Siswa berhasil di hapus.";
            header('location: ?m=manageSiswa');
        } else {
            $_SESSION['gagal'] = "Data Siswa gagal di hapus.";
            header('location: ?m=manageSiswa');
        }
    }
}

<?php
session_start();
if (isset($_GET['kelas'], $_GET['token'])) {
    $kelas = base64_decode($_GET['kelas']);
    $token = $_GET['token'];
    if ($token) {
        $sql = "DELETE FROM kelas_mapel WHERE kelas=:kelas";
        $stmt = $con->prepare($sql);
        $params = array(
            ":kelas" => $kelas
        );
        $hapus = $stmt->execute($params);
        if ($hapus) {
            $_SESSION['sukses'] = "Mapel Kelas berhasil di hapus.";
            header('location: ?m=daftarMapel');
        } else {
            $_SESSION['gagal'] = "Mapel Kelas gagal di hapus.";
            header('location: ?m=daftarMapel');
        }
    }
}

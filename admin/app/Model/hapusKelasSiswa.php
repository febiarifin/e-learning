<?php
session_start();
if (isset($_GET['kelas'], $_GET['token'])) {
    $kelas = base64_decode($_GET['kelas']);
    $token = $_GET['token'];
    if ($token) {
        $sql = "DELETE FROM kelas_siswa WHERE kelas=:kelas";
        $stmt = $con->prepare($sql);
        $params = array(
            ":kelas" => $kelas
        );
        $hapus = $stmt->execute($params);
        if ($hapus) {
            $_SESSION['sukses'] = "Data Kelas berhasil di hapus.";
            header('location: ?m=daftarKelas');
        } else {
            $_SESSION['gagal'] = "Data Kelas gagal di hapus.";
            header('location: ?m=daftarKelas');
        }
    }
}

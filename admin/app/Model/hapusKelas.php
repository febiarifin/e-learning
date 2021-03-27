<?php
session_start();
if (isset($_GET['id'], $_GET['token'])) {
    $id = base64_decode($_GET['id']);
    $token = $_GET['token'];
    if ($token) {
        $sql = "DELETE FROM kelas WHERE id=:id";
        $stmt = $con->prepare($sql);
        $params = array(
            ":id" => $id
        );
        $hapus = $stmt->execute($params);
        if ($hapus) {
            $_SESSION['sukses'] = "Data Kelas berhasil di hapus.";
            header('location: ?m=manageKelas');
        } else {
            $_SESSION['gagal'] = "Data Kelas gagal di hapus.";
            header('location: ?m=manageKelas');
        }
    }
}

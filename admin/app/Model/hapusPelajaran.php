<?php
session_start();
if (isset($_GET['id'], $_GET['token'])) {
    $id = base64_decode($_GET['id']);
    $token = $_GET['token'];
    if ($token) {
        $sql = "DELETE FROM pelajaran WHERE id=:id";
        $stmt = $con->prepare($sql);
        $params = array(
            ":id" => $id
        );
        $hapus = $stmt->execute($params);
        if ($hapus) {
            $_SESSION['sukses'] = "Mata pelajaran berhasil di hapus.";
            header('location: ?m=managePelajaran');
        } else {
            $_SESSION['gagal'] = "Mata pelajaran gagal di hapus.";
            header('location: ?m=managePelajaran');
        }
    }
}

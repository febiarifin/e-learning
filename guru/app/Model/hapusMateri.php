<?php
session_start();
if (isset($_GET['id'], $_GET['token'])) {
    $id = base64_decode($_GET['id']);

    $sql_file = "SELECT * FROM materipelajaran WHERE id=:id";
    $stmt_file = $con->prepare($sql_file);
    $params_file = array(
        ":id" => $id
    );
    $stmt_file->execute($params_file);
    $row = $stmt_file->fetch(PDO::FETCH_ASSOC);
    $file_lama = $row['file'];
    $target = $url . "upload/file/" . $file_lama;

    $token = $_GET['token'];
    if ($token) {
        $sql = "DELETE FROM materipelajaran WHERE id=:id";
        $stmt = $con->prepare($sql);
        $params = array(
            ":id" => $id
        );
        $hapus = $stmt->execute($params);


        $hapus_file = unlink($target);


        if ($hapus && $hapus_file) {
            $_SESSION['sukses'] = "Materi pelajaran berhasil di hapus.";
            header('location: ?m=manageMateri');
        } else {
            $_SESSION['gagal'] = "Materi pelajaran gagal di hapus.";
            header('location: ?m=manageMateri');
        }
    }
}

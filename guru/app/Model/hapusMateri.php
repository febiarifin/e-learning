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

        $sql_absen = "DELETE FROM absen WHERE idmateri=:idmateri";
        $stmt_absen = $con->prepare($sql_absen);
        $params_absen = array(
            ":idmateri" => $id
        );
        $hapus_absen = $stmt_absen->execute($params_absen);


        $hapus_file = unlink($target);

        $sql_diskusi = "DELETE FROM diskusi WHERE idmateri=:idmateri";
        $stmt_diskusi = $con->prepare($sql_diskusi);
        $params_diskusi = array(
            ":idmateri" => $id
        );
        $hapus_diskusi = $stmt_diskusi->execute($params_diskusi);

        if ($hapus && $hapus_file && $hapus_absen && $hapus_diskusi) {
            if (isset($_GET['username'])) {
                $username = $_GET['username'];
                $id = uniqid();
                $akses = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                $sql_log = "INSERT INTO log(id,akses,user)VALUES(:id,:akses,:user)";
                $stmt_log = $con->prepare($sql_log);
                $params = array(
                    ":id" => $id,
                    ":akses" => $akses,
                    ":user" => $username
                );
                $stmt_log->execute($params);
            }

            $_SESSION['sukses'] = "Materi pelajaran berhasil di hapus.";
            header('location: ?m=manageMateri');
        } else {
            $_SESSION['gagal'] = "Materi pelajaran gagal di hapus.";
            header('location: ?m=manageMateri');
        }
    }
}

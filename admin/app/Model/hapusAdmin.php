<?php
session_start();
if (isset($_GET['username'], $_GET['token'])) {
    $username = base64_decode($_GET['username']);

    $sql_foto = "SELECT * FROM admin WHERE username=:username";
    $stmt_foto = $con->prepare($sql_foto);
    $params_foto = array(
        ":username" => $username
    );
    $stmt_foto->execute($params_foto);
    $row = $stmt_foto->fetch(PDO::FETCH_ASSOC);
    $foto_lama = $row['foto'];
    $target = $url . "upload/profil/" . $foto_lama;

    $token = $_GET['token'];
    if ($token) {
        $sql = "DELETE FROM admin WHERE username=:username";
        $stmt = $con->prepare($sql);
        $params = array(
            ":username" => $username
        );
        $hapus = $stmt->execute($params);

        if ($foto_lama != "profil.png") {
            unlink($target);
        }

        if ($hapus) {
            $_SESSION['sukses'] = "Data admin berhasil di hapus.";
            header('location: ?m=manageAdmin');
        } else {
            $_SESSION['gagal'] = "Data admin gagal di hapus.";
            header('location: ?m=manageAdmin');
        }
    }
}

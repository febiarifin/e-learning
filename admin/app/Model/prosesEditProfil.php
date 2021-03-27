<?php
session_start();
include "config/url.php";
if (isset($_POST)) {
    $usernameLama = $_POST['usernameLama'];
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password_default = $_POST['password'];

    $nama_file = $_FILES['foto']['name'];
    $tmp_file = $_FILES['foto']['tmp_name'];
    $ukuran_file = $_FILES['foto']['size'];
    $foto = uniqid() . $nama_file;

    $ekstensi_diperbolehkan = array("png", "jpg", "jpeg");
    $x = explode(".", $nama_file);
    $ekstensi = strtolower(end($x));

    $sql_foto = "SELECT * FROM admin WHERE username=:usernameFoto";
    $stmt_foto = $con->prepare($sql_foto);
    $params_foto = array(
        ":usernameFoto" => $usernameLama
    );
    $stmt_foto->execute($params_foto);
    $row = $stmt_foto->fetch(PDO::FETCH_ASSOC);
    $foto_lama = $row['foto'];
    $target = $url . "upload/profil/" . $foto_lama;


    if (in_array($ekstensi, $ekstensi_diperbolehkan)) {
        if ($ukuran_file != 0) {
            $sql = "UPDATE admin SET username=:username, password=:password, foto=:foto WHERE username=:usernameLama";

            $stmt = $con->prepare($sql);

            $params = array(
                "usernameLama" => $usernameLama,
                ":username" => $username,
                ":password" => $password,
                ":foto" => $foto
            );

            if ($foto_lama != "profil.png") {
                unlink($target);
            }

            $simpan = $stmt->execute($params);
            $move = move_uploaded_file($tmp_file, $url . "upload/profil/" . $foto);
            if ($simpan || $move) {
                $_SESSION['password'] = $password;
                $_SESSION['password_default'] = base64_encode($password_default);
                $_SESSION['sukses'] = "Profil sukses diedit.";
                header('location: ?m=manageProfil');
            } else {
                $_SESSION['gagal'] = "Profil gagal diedit.";
                header('location: ?m=manageProfil');
            }
        } else {
            $_SESSION['gagal'] = "Ukuran file melebihi batas yang ditentukan.";
            header('location: ?m=editProfil');
        }
    } else {
        $_SESSION['gagal'] = "Ekstensi tidak diperbolehkan.";
        header('location: ?m=editProfil');
    }
}

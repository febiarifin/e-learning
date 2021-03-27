<?php
session_start();
include "config/url.php";
if (isset($_POST)) {
    $nis = $_POST['nis'];
    $password = $_POST['password'];

    $nama_file = $_FILES['foto']['name'];
    $tmp_file = $_FILES['foto']['tmp_name'];
    $ukuran_file = $_FILES['foto']['size'];
    $foto = uniqid() . $nama_file;

    $ekstensi_diperbolehkan = array("png", "jpg", "jpeg");
    $x = explode(".", $nama_file);
    $ekstensi = strtolower(end($x));

    $sql_foto = "SELECT * FROM siswa WHERE nis=:nis";
    $stmt_foto = $con->prepare($sql_foto);
    $params_foto = array(
        ":nis" => $nis
    );
    $stmt_foto->execute($params_foto);
    $row = $stmt_foto->fetch(PDO::FETCH_ASSOC);
    $foto_lama = $row['foto'];
    $target = $url . "upload/profil/" . $foto_lama;


    if (in_array($ekstensi, $ekstensi_diperbolehkan)) {
        if ($ukuran_file != 0) {
            $sql = "UPDATE guru SET  foto=:foto WHERE nis=:nis";

            $stmt = $con->prepare($sql);

            $params = array(
                ":nis" => $nis,
                ":foto" => $foto
            );

            if ($foto_lama != "profil.png") {
                unlink($target);
            }

            $simpan = $stmt->execute($params);
            $move = move_uploaded_file($tmp_file, $url . "upload/profil/" . $foto);
            if ($simpan && $move) {
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

                $_SESSION['nis'] = base64_encode($nis);
                $_SESSION['password'] = base64_encode($password);
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

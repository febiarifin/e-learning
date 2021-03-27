<?php
session_start();
if (isset($_POST)) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $foto = "profil.png";
    $level = "user";

    $sql = "INSERT INTO admin(username,password,foto,level) VALUES(:username,:password,:foto,:level)";

    $stmt = $con->prepare($sql);

    $params = array(
        ":username" => $username,
        ":password" => $password,
        ":foto" => $foto,
        ":level" => $level
    );

    $simpan = $stmt->execute($params);
    if ($simpan) {
        $_SESSION['sukses'] = "Admin sukses ditambahkan.";
        header('location: ?m=manageAdmin');
    } else {
        $_SESSION['gagal'] = "Admin gagal ditambahkan.";
        header('location: ?m=manageAdmin');
    }
}

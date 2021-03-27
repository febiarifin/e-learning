<?php
session_start();
include 'config/token.php';

if (isset($_POST)) {
    $nis = filter_input(INPUT_POST, '_nis', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, '_password', FILTER_SANITIZE_STRING);

    // select from tabel admin
    $sql = "SELECT * FROM siswa WHERE nis=:nis AND password=:password";
    $stmt = $con->prepare($sql);
    $params = array(
        ":nis" => $nis,
        ":password" => $password
    );
    $stmt->execute($params);
    $cek = $stmt->fetchColumn();

    if ($cek > 0) {
        $_SESSION['nis'] = base64_encode($nis);
        $_SESSION['status'] = "Selamat datang di panel siswa.";
        $_SESSION['password'] = base64_encode($password);
        $_SESSION['token'] = get_token(50);
        header('location: ?m=home');
    } else {
        $_SESSION['gagal'] = "NIS dan Password salah.";
        header('location: ?m=login');
    }
    echo $nis . "/" . $password;
}

<?php
session_start();
include 'config/token.php';

if (isset($_POST)) {
    $nip = filter_input(INPUT_POST, '_nip', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, '_password', FILTER_SANITIZE_STRING);

    // select from tabel admin
    $sql = "SELECT * FROM guru WHERE nip=:nip AND password=:password";
    $stmt = $con->prepare($sql);
    $params = array(
        ":nip" => $nip,
        ":password" => $password
    );
    $stmt->execute($params);
    $cek = $stmt->fetchColumn();

    if ($cek > 0) {
        $_SESSION['nip'] = base64_encode($nip);
        $_SESSION['status'] = "Selamat datang di panel guru.";
        $_SESSION['password'] = base64_encode($password);
        $_SESSION['token'] = get_token(50);
        header('location: ?m=home');
    } else {
        $_SESSION['gagal'] = "NIP dan Password salah.";
        header('location: ?m=login');
    }
    echo $nip . "/" . $password;
}

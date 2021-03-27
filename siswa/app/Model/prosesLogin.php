<?php
session_start();
include 'config/token.php';

if (isset($_POST)) {
    $nis = filter_input(INPUT_POST, '_nis', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, '_password', FILTER_SANITIZE_STRING);

    // select from tabel siswa
    $sql = "SELECT * FROM siswa WHERE nis=:nis AND password=:password";
    $stmt = $con->prepare($sql);
    $params = array(
        ":nis" => $nis,
        ":password" => $password
    );
    $stmt->execute($params);
    $cek = $stmt->fetchColumn();
    // select data siswa 
    $sql_siswa = "SELECT * FROM siswa WHERE nis=:nis AND password=:password";
    $stmt_siswa = $con->prepare($sql_siswa);
    $params_siswa = array(
        ":nis" => $nis,
        ":password" => $password
    );
    $stmt_siswa->execute($params_siswa);
    $row = $stmt_siswa->fetch(PDO::FETCH_ASSOC);
    $username = $row['nama'];

    if ($cek > 0) {

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

        $_SESSION['nis'] = base64_encode($nis);
        $_SESSION['username'] = base64_encode($username);
        $_SESSION['password'] = base64_encode($password);
        $_SESSION['token'] = get_token(50);
        header('location: ?m=home');
    } else {
        $_SESSION['gagal'] = "NIS dan Password salah.";
        header('location: ?m=login');
    }
    echo $nis . "/" . $password;
}

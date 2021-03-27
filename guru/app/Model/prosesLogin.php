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

    // select data guru 
    $sql_guru = "SELECT * FROM guru WHERE nip=:nip AND password=:password";
    $stmt_guru = $con->prepare($sql_guru);
    $params_guru = array(
        ":nip" => $nip,
        ":password" => $password
    );
    $stmt_guru->execute($params_guru);
    $row = $stmt_guru->fetch(PDO::FETCH_ASSOC);
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

        $_SESSION['nip'] = base64_encode($nip);
        $_SESSION['username'] = base64_encode($username);
        $_SESSION['password'] = base64_encode($password);
        $_SESSION['token'] = get_token(50);
        header('location: ?m=home');
    } else {
        $_SESSION['gagal'] = "NIP dan Password salah.";
        header('location: ?m=login');
    }
    echo $nip . "/" . $password;
}

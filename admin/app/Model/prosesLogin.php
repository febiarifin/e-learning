<?php
session_start();
include 'config/token.php';

if (isset($_POST)) {
    $username = filter_input(INPUT_POST, '_username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, '_password', FILTER_SANITIZE_STRING);

    // select from tabel admin
    $sql = "SELECT * FROM admin WHERE username=:username";
    $stmt = $con->prepare($sql);
    $params = array(
        ":username" => $username
    );
    $stmt->execute($params);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $pass = $row['password'];

    // password check
    $cek = password_verify($password, $pass);


    if ($cek) {
        $_SESSION['username'] = base64_encode($username);
        $_SESSION['password'] = $pass;
        $_SESSION['password_default'] = base64_encode($password);
        $_SESSION['token'] = get_token(50);
        header('location: ?m=home');
    } else {
        $_SESSION['gagal'] = "Username dan Password salah.";
        header('location: ?m=login');
    }
}

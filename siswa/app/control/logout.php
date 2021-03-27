<?php
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
session_start();
session_destroy();
header('location: ?m=login');

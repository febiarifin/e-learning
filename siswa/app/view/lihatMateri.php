<?php
// include "config/url.php";
$url="/";
if (isset($_GET['id'], $_GET['username'])) {
    $id = base64_decode($_GET['id']);
    $sql = "SELECT * FROM materipelajaran WHERE id=:id";
    $stmt = $con->prepare($sql);
    $params = array(
        ":id" => $id
    );
    $stmt->execute($params);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $file = $row['file'];
    $judul = $row['judul'];
    $target = $url . "upload/file/" . $file;

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

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Materi <?= $judul ?></title>
</head>

<body bgcolor="black">
    <iframe src="<?= $target ?>" frameborder="0" style="height:100%;width:100%;"></iframe>
</body>

</html>
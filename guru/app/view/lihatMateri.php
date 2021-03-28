<?php
include "config/url.php";
if ($_GET['id']) {
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
<?php
session_start();
if (isset($_POST)) {
    $id = uniqid();
    $namapelajaran = filter_input(INPUT_POST, 'namapelajaran', FILTER_SANITIZE_STRING);
    $nip = filter_input(INPUT_POST, 'nip', FILTER_SANITIZE_STRING);


    $sql = "INSERT INTO pelajaran(id,namapelajaran,nip) VALUES(:id,:namapelajaran,:nip)";

    $stmt = $con->prepare($sql);

    $params = array(
        ":id" => $id,
        ":namapelajaran" => $namapelajaran,
        ":nip" => $nip
    );

    $simpan = $stmt->execute($params);
    if ($simpan) {
        $_SESSION['sukses'] = "Mata Pelajaran sukses ditambahkan.";
        header('location: ?m=managePelajaran');
    } else {
        $_SESSION['gagal'] = "Mata Pelajaran gagal ditambahkan.";
        header('location: ?m=managePelajaran');
    }
}

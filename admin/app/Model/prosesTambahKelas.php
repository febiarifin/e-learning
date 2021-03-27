<?php
session_start();
if (isset($_POST)) {
    $id = uniqid();
    $kelas = filter_input(INPUT_POST, 'kelas', FILTER_SANITIZE_STRING);
    $jurusan = filter_input(INPUT_POST, 'jurusan', FILTER_SANITIZE_STRING);
    $nomor = filter_input(INPUT_POST, 'nomor', FILTER_SANITIZE_STRING);

    $namaKelas = $kelas . " " . $jurusan . " " . $nomor;

    $sql = "INSERT INTO kelas(id,kelas) VALUES(:id,:kelas)";

    $stmt = $con->prepare($sql);

    $params = array(
        ":id" => $id,
        ":kelas" => $namaKelas
    );

    $simpan = $stmt->execute($params);
    if ($simpan) {
        $_SESSION['sukses'] = "Kelas sukses ditambahkan.";
        header('location: ?m=manageKelas');
    } else {
        $_SESSION['gagal'] = "Kelas gagal ditambahkan.";
        header('location: ?m=manageKelas');
    }
}

<?php
if (isset($_GET['nis'], $_GET['token'])) {
    $nis = base64_decode($_GET['nis']);
    $sql = "SELECT * FROM siswa WHERE nis=:nis";
    $stmt = $con->prepare($sql);
    $params = array(
        ":nis" => $nis
    );
    $stmt->execute($params);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $nama = $row['nama'];
    $jeniskelamin = $row['jeniskelamin'];
    $tanggal_lahir = $row['tanggal_lahir'];
    $tempat_lahir = $row['tempat_lahir'];
    $alamat = $row['alamat'];
    $telepon = $row['telepon'];
    $password_siswa = $row['password'];
}
$title = "Edit Siswa";
$main = VIEW . 'home.php';
$submain = VIEW . 'editSiswa.php';
include VIEW . 'index.php';

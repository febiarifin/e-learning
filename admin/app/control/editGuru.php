<?php
if (isset($_GET['nip'], $_GET['token'])) {
    $nip = base64_decode($_GET['nip']);
    $sql = "SELECT * FROM guru WHERE nip=:nip";
    $stmt = $con->prepare($sql);
    $params = array(
        ":nip" => $nip
    );
    $stmt->execute($params);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $nama = $row['nama'];
    $jeniskelamin = $row['jeniskelamin'];
    $tempat_lahir = $row['tempat_lahir'];
    $tanggal_lahir = $row['tanggal_lahir'];
    $alamat = $row['alamat'];
    $telepon = $row['telepon'];
    $password_guru = $row['password'];
}
$title = "Edit Guru";
$main = VIEW . 'home.php';
$submain = VIEW . 'editGuru.php';
include VIEW . 'index.php';

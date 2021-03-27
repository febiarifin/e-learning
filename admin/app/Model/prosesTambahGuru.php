<?php
session_start();
if (isset($_POST)) {
    $nip = filter_input(INPUT_POST, 'nip', FILTER_SANITIZE_STRING);
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $jeniskelamin = filter_input(INPUT_POST, 'jeniskelamin', FILTER_SANITIZE_STRING);
    $tempat_lahir = filter_input(INPUT_POST, 'tempat_lahir', FILTER_SANITIZE_STRING);
    $tanggal_lahir = filter_input(INPUT_POST, 'tanggal_lahir', FILTER_SANITIZE_STRING);
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    $telepon = filter_input(INPUT_POST, 'telepon', FILTER_SANITIZE_NUMBER_INT);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $foto = "profil.png";

    $sql = "INSERT INTO guru(nip,nama,jeniskelamin,tempat_lahir,tanggal_lahir,alamat,telepon,password,foto) VALUES(:nip,:nama,:jeniskelamin,:tempat_lahir,:tanggal_lahir,:alamat,:telepon,:password,:foto)";

    $stmt = $con->prepare($sql);

    $params = array(
        ":nip" => $nip,
        ":nama" => $nama,
        ":jeniskelamin" => $jeniskelamin,
        ":tempat_lahir" => $tempat_lahir,
        ":tanggal_lahir" => $tanggal_lahir,
        ":alamat" => $alamat,
        ":telepon" => $telepon,
        ":password" => $password,
        ":foto" => $foto
    );

    $simpan = $stmt->execute($params);
    if ($simpan) {
        $_SESSION['sukses'] = "Guru sukses ditambahkan.";
        header('location: ?m=manageGuru');
    } else {
        $_SESSION['gagal'] = "Guru gagal ditambahkan.";
        header('location: ?m=manageGuru');
    }
}

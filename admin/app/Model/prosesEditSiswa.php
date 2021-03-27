<?php
session_start();
if (isset($_POST)) {
    $nisLama = $_POST['nisLama'];
    $nis = filter_input(INPUT_POST, 'nis', FILTER_SANITIZE_STRING);
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $jeniskelamin = filter_input(INPUT_POST, 'jeniskelamin', FILTER_SANITIZE_STRING);
    $tempat_lahir = filter_input(INPUT_POST, 'tempat_lahir', FILTER_SANITIZE_STRING);
    $tanggal_lahir = filter_input(INPUT_POST, 'tanggal_lahir', FILTER_SANITIZE_STRING);
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    $telepon = filter_input(INPUT_POST, 'telepon', FILTER_SANITIZE_NUMBER_INT);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "UPDATE siswa SET nis=:nis, nama=:nama, jeniskelamin=:jeniskelamin, tempat_lahir=:tempat_lahir,tanggal_lahir=:tanggal_lahir, alamat=:alamat, telepon=:telepon, password=:password WHERE nis=:nisLama";

    $stmt = $con->prepare($sql);

    $params = array(
        "nisLama" => $nisLama,
        ":nis" => $nis,
        ":nama" => $nama,
        ":jeniskelamin" => $jeniskelamin,
        ":tempat_lahir" => $tempat_lahir,
        ":tanggal_lahir" => $tanggal_lahir,
        ":alamat" => $alamat,
        ":telepon" => $telepon,
        ":password" => $password
    );

    $simpan = $stmt->execute($params);

    // update tabel kelas_siswa
    $sql_kelas_siswa = "UPDATE kelas_siswa SET nis=:nis WHERE nis=:nisLama";

    $stmt_kelas_siswa  = $con->prepare($sql_kelas_siswa);

    $params_kelas_siswa  = array(
        "nisLama" => $nisLama,
        ":nis" => $nis
    );

    $simpan_kelas_siswa  = $stmt_kelas_siswa->execute($params_kelas_siswa);

    if ($simpan) {
        $_SESSION['sukses'] = "Siswa sukses diedit.";
        header('location: ?m=manageSiswa');
    } else {
        $_SESSION['gagal'] = "Siswa gagal diedit.";
        header('location: ?m=manageSiswa');
    }
}

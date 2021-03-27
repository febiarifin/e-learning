<?php
session_start();
if (isset($_POST)) {
    $nipLama = $_POST['nipLama'];
    $nip = filter_input(INPUT_POST, 'nip', FILTER_SANITIZE_STRING);
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $jeniskelamin = filter_input(INPUT_POST, 'jeniskelamin', FILTER_SANITIZE_STRING);
    $tempat_lahir = filter_input(INPUT_POST, 'tempat_lahir', FILTER_SANITIZE_STRING);
    $tanggal_lahir = filter_input(INPUT_POST, 'tanggal_lahir', FILTER_SANITIZE_STRING);
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    $telepon = filter_input(INPUT_POST, 'telepon', FILTER_SANITIZE_NUMBER_INT);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "UPDATE guru SET nip=:nip, nama=:nama, jeniskelamin=:jeniskelamin, tempat_lahir=:tempat_lahir,tanggal_lahir=:tanggal_lahir, alamat=:alamat, telepon=:telepon, password=:password WHERE nip=:nipLama";

    $stmt = $con->prepare($sql);

    $params = array(
        "nipLama" => $nipLama,
        ":nip" => $nip,
        ":nama" => $nama,
        ":jeniskelamin" => $jeniskelamin,
        ":tempat_lahir" => $tempat_lahir,
        ":tanggal_lahir" => $tanggal_lahir,
        ":alamat" => $alamat,
        ":telepon" => $telepon,
        ":password" => $password
    );

    $simpan = $stmt->execute($params);

    // update tabel pelajaran
    $sql_pelajaran = "UPDATE pelajaran SET nip=:nip WHERE nip=:nipLama";

    $stmt_pelajaran  = $con->prepare($sql_pelajaran);

    $params_pelajaran  = array(
        "nipLama" => $nipLama,
        ":nip" => $nip
    );

    $simpan_pelajaran  = $stmt_pelajaran->execute($params_pelajaran);

    // update tabel kelas_siswa
    $sql_kelas_siswa = "UPDATE kelas_siswa SET nip=:nip WHERE nip=:nipLama";

    $stmt_kelas_siswa  = $con->prepare($sql_kelas_siswa);

    $params_kelas_siswa  = array(
        "nipLama" => $nipLama,
        ":nip" => $nip
    );

    $simpan_kelas_siswa  = $stmt_kelas_siswa->execute($params_kelas_siswa);

    if ($simpan && $simpan_pelajaran && $simpan_kelas_siswa) {
        $_SESSION['sukses'] = "Guru sukses diedit.";
        header('location: ?m=manageGuru');
    } else {
        $_SESSION['gagal'] = "Guru gagal diedit.";
        header('location: ?m=manageGuru');
    }
}

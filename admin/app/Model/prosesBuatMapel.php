<?php
session_start();
if (isset($_POST)) {
    $jumlah_post = $_POST['jumlah_post'];

    for ($x = 0; $x < $jumlah_post; $x++) {
        $kelas = $_POST['kelas'];
        $matapelajaran = $_POST['matapelajaran' . $x];

        $sql = "INSERT INTO kelas_mapel(kelas,matapelajaran) VALUES('$kelas','$matapelajaran')";

        $stmt = $con->prepare($sql);

        $simpan = $stmt->execute();
        if ($simpan) {
            $_SESSION['sukses'] = "Mapel kelas sukses dibuat.";
            header('location: ?m=daftarMapel');
        } else {
            $_SESSION['gagal'] = "Mapel kelas gagal dibuat.";
            header('location: ?m=buatMapel');
        }
    }
}
<?php
session_start();
if (isset($_POST)) {
    $jumlah_post = $_POST['jumlah_post'];

    for ($x = 0; $x < $jumlah_post; $x++) {
        $kelas = $_POST['kelas' . $x];
        $nip = $_POST['nip' . $x];
        $nis = $_POST['nis' . $x];

        $sql = "INSERT INTO kelas_siswa(kelas,nip,nis) VALUES('$kelas','$nip','$nis')";

        $stmt = $con->prepare($sql);

        $simpan = $stmt->execute();
        if ($simpan) {
            $_SESSION['sukses'] = "Kelas Siswa sukses dibuat.";
            header('location: ?m=daftarKelas');
        } else {
            $_SESSION['gagal'] = "Kelas Siswa gagal dibuat.";
            header('location: ?m=buatKelas');
        }
    }
}

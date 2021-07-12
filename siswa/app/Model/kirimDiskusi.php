<?php 
session_start();
    if (isset($_POST)) {
        $idmateri = filter_input(INPUT_POST,'idmateri', FILTER_SANITIZE_STRING);
        $nis = filter_input(INPUT_POST,'nis', FILTER_SANITIZE_STRING);
        $nama = filter_input(INPUT_POST,'nama', FILTER_SANITIZE_STRING);
        $isi = filter_input(INPUT_POST,'isi', FILTER_SANITIZE_STRING);
        $data = $_POST['data'];
        $dataArray = explode(',',$data);
        $judul = $dataArray[0];
        $idpelajaran = $dataArray[1];
        $kelas = $dataArray[2];
        $mapel = $dataArray[3];
        $guru = $dataArray[4];
        
        $sql = "INSERT INTO `diskusi`(`idmateri`, `nis`, `nama`, `isi`) VALUES('$idmateri','$nis','$nama','$isi')";

        $stmt = $con->prepare($sql);

        $simpan = $stmt->execute();
        if ($simpan) {
            $_SESSION['berhasil'] = "Komentar terkirim.";
            header("location: ?m=diskusi&nis={$nis}&id_materi={$idmateri}&username={$nama}&judul={$judul}&idpelajaran={$idpelajaran}&kelas={$kelas}&mapel={$mapel}&guru={$guru}");
        } else {
            $_SESSION['gagal'] = "Komentar tidak terkirim.";
            header("location: ?m=diskusi&nis={$nis}&id_materi={$idmateri}&username={$nama}&judul={$judul}&idpelajaran={$idpelajaran}&kelas={$kelas}&mapel={$mapel}&guru={$guru}");
        }

    }
?>
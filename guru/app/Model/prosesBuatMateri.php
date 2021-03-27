<?php
session_start();
include "config/url.php";
if (isset($_POST)) {
    $id = uniqid();
    $nip = filter_input(INPUT_POST, 'nip', FILTER_SANITIZE_STRING);
    $matapelajaran = filter_input(INPUT_POST, 'matapelajaran', FILTER_SANITIZE_STRING);
    $judul = filter_input(INPUT_POST, 'judul', FILTER_SANITIZE_STRING);
    $ringkasan = filter_input(INPUT_POST, 'ringkasan', FILTER_SANITIZE_STRING);
    $kelas = filter_input(INPUT_POST, 'kelas', FILTER_SANITIZE_STRING);

    $file_name = $_FILES['file']['name'];
    $size_file = $_FILES['file']['size'];
    $tmp_file = $_FILES['file']['tmp_name'];
    $file = uniqid() . $file_name;

    $ekstensi_diperbolehkan = array("pdf", "docx", "pptx");
    $x = explode(".", $file_name);
    $ekstensi = strtolower(end($x));

    if (in_array($ekstensi, $ekstensi_diperbolehkan)) {
        if ($size_file > 8000000) {
            $_SESSION['gagal'] = "ukuran file melebihi batas.";
            header('location: ?m=materiPelajaran');
        } else {
            $move = move_uploaded_file($tmp_file, $url . "upload/file/" . $file);
            $sql = "INSERT INTO materipelajaran(id,idpelajaran,judul,ringkasan,nip,file,kelas)VALUES(:id,:matapelajaran,:judul,:ringkasan,:nip,:file,:kelas)";
            $stmt = $con->prepare($sql);
            $params = array(
                ":id" => $id,
                ":nip" => $nip,
                ":matapelajaran" => $matapelajaran,
                ":judul" => $judul,
                ":ringkasan" => $ringkasan,
                ":file" => $file,
                ":kelas" => $kelas
            );
            $simpan = $stmt->execute($params);
            if ($simpan && $move) {
                $_SESSION['sukses'] = "Materi berhasil dibuat.";
                header('location: ?m=manageMateri');
            } else {
                $_SESSION['gagal'] = "Materi gagal dibuat.";
                header('location: ?m=materiPelajaran');
            }
        }
    } else {
        $_SESSION['gagal'] = "Format file tidak diperbolehkan.";
        header('location: ?m=materiPelajaran');
    }
}

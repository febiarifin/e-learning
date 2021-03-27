<?php
$modul = (@$_GET['m'] ?: '');
switch ($modul) {

    case 'siswa':
        include API . 'siswa.php';
        break;
    case 'guru':
        include API . 'guru.php';
        break;
    case 'kelas':
        include API . 'kelas.php';
        break;
    case 'pelajaran':
        include API . 'pelajaran.php';
        break;
    case 'kelassiswa':
        include API . 'kelas_siswa.php';
        break;
    case 'mapelkelas':
        include API . 'mapel_kelas.php';
        break;
    case 'materipelajaran':
        include API . 'materi_pelajaran.php';
        break;
    default:
        include CONTROL . 'index.php';
        break;
}

<?php
$modul = (@$_GET['m'] ?: '');
switch ($modul) {
    case 'home':
        include CONTROL . 'index.php';
        break;
    case 'login':
        include CONTROL . 'login.php';
        break;
    case 'prosesLogin':
        include MODEL . 'prosesLogin.php';
        break;
        // pelajaran
    case 'pelajaran':
        include CONTROL . 'pelajaran.php';
        break;
        // lihat materiPelajaran
    case 'lihatMateri':
        include VIEW . 'lihatMateri.php';
        break;
    case 'materi':
        include CONTROL . 'materi.php';
        break;
        // absen
    case 'absen':
        include CONTROL . 'absen.php';
        break;

        // manage profil
    case 'manageProfil':
        include CONTROL . 'manageProfil.php';
        break;
    case 'editProfil':
        include CONTROL . 'editProfil.php';
        break;
    case 'prosesEditProfil':
        include MODEL . 'prosesEditProfil.php';
        break;

    case 'logout':
        include CONTROL . 'logout.php';
        break;
    default:
        include CONTROL . 'login.php';
        break;
}

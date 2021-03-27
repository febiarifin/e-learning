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
    case 'materiPelajaran':
        include CONTROL . 'materiPelajaran.php';
        break;
    case 'prosesBuatMateri':
        include MODEL . 'prosesBuatMateri.php';
        break;
        // manageMateri
    case 'manageMateri':
        include CONTROL . 'manageMateri.php';
        break;
    case 'hapusMateri':
        include MODEL . 'hapusMateri.php';
        break;
        // lihat materiPelajaran
    case 'lihatMateri':
        include VIEW . 'lihatMateri.php';
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

<?php
$modul = (@$_GET['m'] ?: '');
switch ($modul) {
    case 'home':
        include CONTROL . 'index.php';
        break;
    case 'login':
        include CONTROL . 'login.php';
        break;
        // manage admin
    case 'manageAdmin':
        include CONTROL . 'manageAdmin.php';
        break;
    case 'tambahAdmin':
        include CONTROL . 'tambahAdmin.php';
        break;
    case 'prosesTambahAdmin':
        include MODEL . 'prosesTambahAdmin.php';
        break;
    case 'prosesLogin':
        include MODEL . 'prosesLogin.php';
        break;
    case 'hapusAdmin':
        include MODEL . 'hapusAdmin.php';
        break;
        // manage guru
    case 'manageGuru':
        include CONTROL . 'manageGuru.php';
        break;
    case 'tambahGuru':
        include CONTROL . 'tambahGuru.php';
        break;
    case 'prosesTambahGuru':
        include MODEL . 'prosesTambahGuru.php';
        break;
    case 'editGuru':
        include CONTROL . 'editGuru.php';
        break;
    case 'prosesEditGuru':
        include MODEL . 'prosesEditGuru.php';
        break;
    case 'hapusGuru':
        include MODEL . 'hapusGuru.php';
        break;
        // manage siswa
    case 'manageSiswa':
        include CONTROL . 'manageSiswa.php';
        break;
    case 'tambahSiswa':
        include CONTROL . 'tambahSiswa.php';
        break;
    case 'prosesTambahSiswa':
        include MODEL . 'prosesTambahSiswa.php';
        break;
    case 'editSiswa':
        include CONTROL . 'editSiswa.php';
        break;
    case 'prosesEditSiswa':
        include MODEL . 'prosesEditSiswa.php';
        break;
    case 'hapusSiswa':
        include MODEL . 'hapusSiswa.php';
        break;
        // manage kelas
    case 'manageKelas':
        include CONTROL . 'manageKelas.php';
        break;
    case 'prosesTambahKelas':
        include MODEL . 'prosesTambahKelas.php';
        break;
    case 'hapusKelas':
        include MODEL . 'hapusKelas.php';
        break;
        // manage pelajaran
    case 'managePelajaran':
        include CONTROL . 'managePelajaran.php';
        break;
    case 'prosesTambahPelajaran':
        include MODEL . 'prosesTambahPelajaran.php';
        break;
    case 'hapusPelajaran':
        include MODEL . 'hapusPelajaran.php';
        break;
    case 'manageProfil':
        include CONTROL . 'manageProfil.php';
        break;
    case 'editProfil':
        include CONTROL . 'editProfil.php';
        break;
    case 'prosesEditProfil':
        include MODEL . 'prosesEditProfil.php';
        break;
        // buat kelas
    case 'buatKelas':
        include CONTROL . 'buatKelas.php';
        break;
    case 'prosesBuatKelas':
        include MODEL . 'prosesBuatKelas.php';
        break;
    case 'daftarKelas':
        include CONTROL . 'daftarKelas.php';
        break;
    case 'hapusKelasSiswa':
        include MODEL . 'hapusKelasSiswa.php';
        break;
        // buat mapel
    case 'buatMapel':
        include CONTROL . 'buatMapel.php';
        break;
    case 'prosesBuatMapel':
        include MODEL . 'prosesBuatMapel.php';
        break;
    case 'daftarMapel':
        include CONTROL . 'daftarMapel.php';
        break;
    case 'hapusMapel':
        include MODEL . 'hapusMapel.php';
        break;
        // log
    case 'log':
        include CONTROL . 'log.php';
        break;
    case 'hapusLog':
        include MODEL . 'hapusLog.php';
        break;

        // faker
    case 'fakerSiswa':
        include FAKER . 'siswa.php';
        break;
    case 'fakerGuru':
        include FAKER . 'guru.php';
        break;


    case 'logout':
        include CONTROL . 'logout.php';
        break;
    default:
        include CONTROL . 'login.php';
        break;
}

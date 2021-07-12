<?php

$id_materi = $_GET['id_materi'];
$nis = $_GET['nis'];
$username = $_GET['username'];
$judul = $_GET['judul'];
$id = $_GET['idpelajaran'];
$kelas = $_GET['kelas'];
$mapel = $_GET['mapel'];
$guru = $_GET['guru'];

$title = "Materi pelajaran : " . $judul;
$main = VIEW . 'home.php';
$submain = VIEW . 'diskusi.php';
include VIEW . 'index.php';

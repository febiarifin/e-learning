<?php

$id = $_GET['idpelajaran'];
$kelas = $_GET['kelas'];
$mapel = $_GET['mapel'];
$guru = $_GET['guru'];

$title = "Materi pelajaran : " . $mapel;
$main = VIEW . 'home.php';
$submain = VIEW . 'materi.php';
include VIEW . 'index.php';

<?php

$id_materi = $_GET['id_materi'];
$judul = $_GET['judul'];

$title = "Materi pelajaran : " . $judul;
$main = VIEW . 'home.php';
$submain = VIEW . 'diskusi.php';
include VIEW . 'index.php';

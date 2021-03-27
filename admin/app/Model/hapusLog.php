<?php
session_start();

$sql = "DELETE FROM log";
$stmt = $con->prepare($sql);
$hapus = $stmt->execute();
if ($hapus) {
    $_SESSION['sukses'] = "Data log berhasil di hapus.";
    header('location: ?m=log');
} else {
    $_SESSION['gagal'] = "Data log gagal di hapus.";
    header('location: ?m=log');
}

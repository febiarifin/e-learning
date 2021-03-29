<?php
// timer
$timeout = 1; // Set timeout menit
$logout_redirect_url = "?m=logout"; // Set logout URL

$timeout = $timeout * 1200; // Ubah menit ke detik
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Silahkan login kembali !'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
